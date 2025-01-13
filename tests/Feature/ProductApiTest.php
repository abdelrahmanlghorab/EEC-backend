<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
class ProductApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_get_all_products()
    {
        $this->assertCount(0, Product::all());
        // Create dummy products
        Product::factory()->count(3)->create();

        // Call the API
        $response = $this->get('/api/products');

        // Check response
        $response->assertStatus(200);
        $response->assertJsonCount(3, 'data');
    }

    public function test_create_a_product()
    {
        $category = Category::create(['name' => 'Sample Category']);
        // Product data
        $productData = [
            'title' => 'Sample Product',
            'price' => 100,
            'image' => 'sample.jpg',
            'description' => 'Sample description',
            'category_id' => $category->id,
            'quantity' => 10,
            'code' => 'SP123',
        ];

        // Call the API
        $response = $this->post('/api/products', $productData);

        // Check response and database
        $response->assertStatus(201);
        $this->assertDatabaseHas('products', ['title' => 'Sample Product']);
    }
}
