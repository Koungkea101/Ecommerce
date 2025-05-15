<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    public function uploadToLocal(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('uploads', 'public');

        return response()->json(['path' => $path], 200);
    }

    public function getFromLocal($filename)
    {
        $path = storage_path("app/public/uploads/{$filename}");

        if (file_exists($path)) {
            return response()->file($path);
        }

        return response()->json(['message' => 'File not found.'], 404);
    }

    public function uploadToMinio(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $image = $request->file('image');
        $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

        // Store the original image in the 'uploads' directory on the MinIO disk
        $originalPath = $image->storeAs('uploads', $fileName, 'minio');

        // Create and store thumbnail
        $thumbnailPath = 'thumbnails/' . $fileName;
        $intervention = Image::make($image->getRealPath());
        $intervention->fit(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        });

        // Convert the intervention image to a stream and store it in MinIO
        $thumbnailStream = $intervention->stream();
        Storage::disk('minio')->put($thumbnailPath, $thumbnailStream->__toString());

        return response()->json([
            'original_path' => $originalPath,
            'thumbnail_path' => $thumbnailPath,
        ], 200);
    }

    public function getFromMinio($filename, $type = 'original')
    {
        // Determine the directory based on the type
        $directory = $type === 'thumbnail' ? 'thumbnails' : 'uploads';
        $path = "{$directory}/{$filename}";

        if (Storage::disk('minio')->exists($path)) {
            $file = Storage::disk('minio')->get($path);
            $mime = Storage::disk('minio')->mimeType($path);
            return response($file)
                ->header('Content-Type', $mime)
                ->header('Cache-Control', 'public, max-age=86400'); // Cache for 24 hours
        }

        return response()->json([
            'message' => "File not found in MinIO {$directory} directory.",
            'path' => $path
        ], 404);
    }
}
