<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;
use App\Models\Product;
class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_create_product()
    {
        $category = Category::factory()->create();
        $payload = [
            'name' => 'Lipstick',
            'description' => 'A long-lasting, vibrant lipstick.',
            'price' => 15.99,
            'image_url' => 'https://playground.com/design/c/art/1.jpg',
            'category_id' => $category->id,
        ];

        $response = $this->postJson('/api/products', $payload);

        $response->assertStatus(201)
                 ->assertJsonFragment(['name' => 'Lipstick']);
        $this->assertDatabaseHas('products', ['name' => 'Lipstick']);
    }

    public function test_can_fetch_products()
    {
        Product::factory(10)->create();

        $response = $this->getJson('/api/products');

        $response->assertStatus(200)
                 ->assertJsonCount(10);
    }

    public function test_can_fetch_single_product()
    {
        $product = Product::factory()->create();

        $response = $this->getJson("/api/products/{$product->id}");

        $response->assertStatus(200)
                 ->assertJsonFragment(['name' => $product->name]);
    }

    public function test_can_update_product()
    {
        $product = Product::factory()->create();

        $payload = [
            'name' => 'Updated Product',
            'description' => 'Updated description.',
            'price' => 19.99,
            'image_url' => 'https://playground.com/design/c/art/updated.jpg',
        ];

        $response = $this->putJson("/api/products/{$product->id}", $payload);

        $response->assertStatus(200)
                 ->assertJsonFragment(['name' => 'Updated Product']);
        $this->assertDatabaseHas('products', ['name' => 'Updated Product']);
    }

    public function test_can_delete_product()
    {
        $product = Product::factory()->create();

        $response = $this->deleteJson("/api/products/{$product->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }

    public function test_validation_error_on_create_product()
    {
        $payload = [
            'name' => '',
            'description' => 'A product with missing fields.',
            'price' => '',
            'category_id' => '',
        ];

        $response = $this->postJson('/api/products', $payload);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['name', 'price', 'category_id']);
    }
}
