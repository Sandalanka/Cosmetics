<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_create_category()
    {
        $response = $this->postJson('/api/categories', ['name' => 'Skincare']);
        $response->assertStatus(200)->assertJson(['name' => 'Skincare']);
        $this->assertDatabaseHas('categories', ['name' => 'Skincare']);
    }

    public function test_can_fetch_categories()
    {
        //Category::factory(5)->create();
        $response = $this->getJson('/api/categories');
        $response->assertStatus(200);
    }

    public function test_can_update_category()
    {
        $category = Category::factory()->create();
        $response = $this->putJson("/api/categories/{$category->id}", ['name' => 'Updated Name']);
        $response->assertStatus(200)->assertJson(['name' => 'Updated Name']);
        $this->assertDatabaseHas('categories', ['name' => 'Updated Name']);
    }

    public function test_can_delete_category()
    {
        $category = Category::factory()->create();
        $response = $this->deleteJson("/api/categories/{$category->id}");
        $response->assertStatus(200);
        // $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }
}
