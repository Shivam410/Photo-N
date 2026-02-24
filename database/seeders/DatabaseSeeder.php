<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'is_admin' => true,
        ]);

        // Add sample featured items
        Feature::create([
            'image' => 'https://images.unsplash.com/photo-1519741497674-611481863552?w=500&h=500&fit=crop',
            'category' => 'weddings',
        ]);

        Feature::create([
            'image' => 'https://images.unsplash.com/photo-1500268541257-0ba91af25d5b?w=500&h=500&fit=crop',
            'category' => 'portraits',
        ]);

        Feature::create([
            'image' => 'https://images.unsplash.com/photo-1493246507139-91e8fad9978e?w=500&h=500&fit=crop',
            'category' => 'architecture',
        ]);

        Feature::create([
            'image' => 'https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=500&h=500&fit=crop',
            'category' => 'weddings',
        ]);

        Feature::create([
            'image' => 'https://images.unsplash.com/photo-1490771967688-6d0b5e26efd2?w=500&h=500&fit=crop',
            'category' => 'portraits',
        ]);

        Feature::create([
            'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=500&h=500&fit=crop',
            'category' => 'architecture',
        ]);
    }
}
