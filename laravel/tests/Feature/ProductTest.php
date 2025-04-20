<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_if_we_can_access_getAll_productAPI(): void
    {
        $response = $this->get('/api/products');

        $response->assertStatus(200);
        //it check that response when parsed as JSON, is an array
        $this->assertIsArray($response->json());
    }

    public function test_if_we_have_product_db(): void
    {
        $this->assertTrue(Schema::hasTable('products'));
    }

    public function test_api_create_row_product(): void
    {
        $model=\App\Models\Product::factory()->create();
        $this->assertDatabaseHas('products',['id'=>$model->id]);
    }

    public function test_if_we_can_soft_delete_product(): void
    {
        $product=\App\Models\Product::factory()->create();
        $product->delete();

        $this->assertDatabaseHas('products',[
            'id'=>$product->id,
            'deleted_at'=>now(),
        ]);
        $this->assertNull(\App\Models\Product::find($product->id));

    }
}
