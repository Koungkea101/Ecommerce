<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 2rem 0;
        }
        .upload-container {
            max-width: 800px;
            margin: 0 auto;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 2rem;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.12);
        }
        .card-header {
            padding: 1.25rem 1.5rem;
            font-weight: 600;
            font-size: 1.2rem;
            border-bottom: none;
        }
        .local-header {
            background: linear-gradient(to right, #ff9a00, #ff6a00);
            color: white;
        }
        .minio-header {
            background: linear-gradient(to right, #0062cc, #007bff);
            color: white;
        }
        .card-body {
            padding: 1.5rem;
        }
        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        .form-control {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #e0e0e0;
            background-color: #f9f9f9;
            transition: all 0.3s;
        }
        .form-control:focus {
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
            border-color: #86b7fe;
        }
        .upload-btn {
            padding: 0.75rem 2rem;
            font-weight: 500;
            border-radius: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }
        .local-btn {
            background: linear-gradient(to right, #ff9a00, #ff6a00);
            border: none;
        }
        .local-btn:hover {
            background: linear-gradient(to right, #ff8a00, #ff5a00);
            transform: translateY(-2px);
        }
        .minio-btn {
            background: linear-gradient(to right, #0062cc, #007bff);
            border: none;
        }
        .minio-btn:hover {
            background: linear-gradient(to right, #005cbf, #0069d9);
            transform: translateY(-2px);
        }
        .page-title {
            color: #495057;
            font-weight: 700;
            margin-bottom: 2rem;
            text-align: center;
        }
        .file-icon {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h1 class="page-title">File Upload System</h1>

        <div class="card">
            <div class="card-header local-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-arrow-up file-icon" viewBox="0 0 16 16">
                    <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707z"/>
                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                </svg>
                Upload File to Local Storage
            </div>
            <div class="card-body">
                <form action="{{ route('upload.local') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="image" class="form-label">Select Image</label>
                        <input type="file" class="form-control" id="image" name="image" required />
                    </div>
                    <button type="submit" class="btn upload-btn local-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up-fill me-2" viewBox="0 0 16 16">
                            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        Upload to Local
                    </button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header minio-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-image file-icon" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z"/>
                </svg>
                Upload Image to MinIO Server
            </div>
            <div class="card-body">
                <form action="{{ route('upload.minio') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="image" class="form-label">Select Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required />
                    </div>
                    <button type="submit" class="btn upload-btn minio-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up-fill me-2" viewBox="0 0 16 16">
                            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        Upload to MinIO
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS (Optional, for components like tooltips or modals if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
