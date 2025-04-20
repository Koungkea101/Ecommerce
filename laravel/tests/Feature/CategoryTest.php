<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryTest extends TestCase
{
    /**
     * Test ID: Category-001
     * Test Name: Test if we can access the create category API
     * Test Description: This test checks if the create category API is accessible and returns a success message.
     * Test Steps:
     * 1. Hit the get all categories API endpoint
     * 2. Assert that the response status is 200
     * Test Data: None
     * Expected Result: The API respone should return a 200
     * Actual Result: The API respone should return a 200
     * Status: Passed
     * Remark: None
     */
    public function test_if_we_can_access_getAll_categoryAPI(): void
    {
        $response = $this->get('/api/categories');

        $response->assertStatus(200)->assertJsonFragment([
            'message' => 'success',
        ]);
        $response->assertStatus(200);
        // The API returns an array of products directly, not a message
        $this->assertIsArray($response->json());
    }
    /**
     * Test ID: Category-002
     * Test Name: Test if we can access the category table exist
     * Test Description: This test checks if the category table exists in the database.
     * Test Steps:
     * 1. Check if the category table exists in the database.
     * Test Data: None
     * Expected Result: The category table should exist in the database.
     * Actual Result: The category table should exist in the database.
     * Status: Passed
     * Remark: None
     */
    public function test_if_we_have_category_database(): void
    {
        $this->assertTrue(Schema::hasTable('categories'));
    }
    /**
     * Test ID: Category-003
     * Test Name: test if category have column
     * Test Description: Test if we categories has certain column
     * Test Steps:
     * 1. Check if column exist in table
     * Test Data: None
     * Expected Result: The category should have certain column
     * Actual Result: has that column
     * Status: Passed
     * Remark: None
    */
    public function test_if_category_has_name_column(): void
    {
        $this->assertTrue(Schema::hasColumn('categories','name'));
    }

    /**
     * Test ID: Category-004
     * Test Name: Test if we can add row to category
     * Test Description: This test checks if we can add a row to the category table.
     * Test Steps:
     * 1. Create a new category using the Category model.
     * 2. Check if the category was added to the database.
     * Test Data: Category name: "test category"
     * Expected Result: The category should be added to the database.
     * Actual Result: The category was added to the database.
     * Status: Passed
     * Remark: None
    */
    public function test_if_we_can_add_row_to_category(): void
    {
        $model=\App\Models\Category::create(['name'=>'test category']);
        $this->assertDatabaseHas('categories',['name'=>'test category']);
    }
    /**
     * Test ID: Category-005
     * Test Name: Test API create category endpoint
     * Test Description: This test validates that the POST API endpoint can create a new category.
     * Test Steps:
     * 1. Send POST JSON request to the create category API endpoint with a name.
     * 2. Assert that the response status is 201. (201 code for the resquest is fulfilled and new resource is created)
     * 3. Check if the category was added to the database.
     * Test Data: Category name: "api test category"
     * Expected Result: The API respone should return a 201 and success message
     * Actual Result: The API respone should return a 200 and success message
     * Status: Passed
     * Remark: None
    */

    public function test_api_create_row_category(): void
    {
        $response=$this->postJson('/api/categories',['name'=>'api test category']);
        $response->assertStatus(201);
        $this->assertDatabaseHas('categories',['name'=>'api test category']);
    }
    /**
     * Test ID: Category-006
     * Test Name: Test relation between category and product
     * Test Description: This test verifies the relationship between Category and Product models.
     * Test Steps:
     * 1. insert random data into category for testing
     * 2. insert data into product for testing ensuring that it contain category-id
     * 3. check if category-id is equal to product category-id
     * Test Data: Factory-generated category and product
     * Expected Result: category-id should be equal to product category-id
     * Actual Result: category-id should be equal to product category-id
     * Status: Passed
     * Remark: None
    */

    public function test_relation_category_and_product(): void
    {
        $category = \App\Models\Category::factory()->create(); //use to insert random data into category for testing
        $product = \App\Models\Product::factory()->create(['category_id' => $category->id]);

        $this->assertEquals($category->id, $product->category->id);
    }
    /**
     * Test ID: Category-007
     * Test Name: Test api category update
     * Test Description: This test validates that the PUT API endpoint can update an existing category.
     * Test Steps:
     * 1. insert random data into category for testing
     * 2. update the category name using PUT JSON to 'update new category name'
     * 3. check if the category name is updated
     * Test Data: Factory-generated category
     * Expected Result: category name should be updated
     * Actual Result: category name should be updated
     * Status: Passed
     * Remark: None
    */
    public function test_api_category_update(): void
    {
        $category = \App\Models\Category::factory()->create();

        $response=$this->putJson("/api/categories/{$category->id}",[
            'name'=>'Updated New Category Name'
        ]);

        //check if it updated or not
        $response->assertStatus(200);
        $this->assertDatabaseHas('categories',[
            'id'=>$category->id,
            'name'=>'Updated New Category Name'
        ]);

    }

    /**
     * Test ID: Category-008
     * Test Name: Test api get one category via id
     * Test Description: This test verifies that a specific category can be retrieved by its ID through the API.
     * Test Steps:
     * 1. insert random data into category for testing
     * 2. check if we can get one category we just created via id
     * Test Data: Factory-generated category
     * Expected Result: category name should be updated
     * Actual Result: category name should be updated
     * Status: Passed
     * Remark: None
    */
    public function test_get_one_category_via_id(): void
    {
        $category=\App\Models\Category::factory()->create();
        $response=$this->getJson("/api/categories/{$category->id}");

        $response->assertStatus(200)->assertJson([
            'id'=> $category->id,
            'name'=>$category->name
        ]);
    }

    /**
     * Test ID: Category-009
     * Test Name: Test api get one category via invalid id
     * Test Description: This test checks the API behavior when requesting a non-existent category ID.
     * Test Steps:
     * 1. Send a GET request with non-existing category ID
     * 2. verify that the response status code is 404
     * Test Data: invalid category id '12345'
     * Expected Result: response status code should be 404
     * Actual Result: response status code should be 404
     * Status: Passed
     * Remark: None
     *
    */
    public function test_categories_invalid_getID(): void
    {
        $response=$this->getJson("/api/categories/12345");

        $response->assertStatus(404);

    }
    /**
     * Test ID: Category-010
     * Test Name: Test soft delete function for category
     * Test Description: This test verifies that the soft delete functionality works correctly for categories.
     * Test Steps:
     * 1. Create a new category using the Category model.
     * 2. Delete the category using the delete() method.
     * 3. Verify the category has deleted_at timestamp in the database
     * 4. Check that category cannot be get using find method
     * Test Data: Factory-generated category
     * Expected Result: category deleted_at timestamp should be updated
     * Actual Result: category deleted_at timestamp should be updated
     * Status: Passed
     * Remark: None
    */
    public function test_if_we_can_soft_delete_catgories(): void
    {
        $category=\App\Models\Category::factory()->create();
        $category->delete();

        $this->assertDatabaseHas('categories',[
            'id'=>$category->id,
            'deleted_at'=>now(),
        ]);
        $this->assertNull(\App\Models\Category::find($category->id));

    }


}
