<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis' => fake()->word(),
            'kondisi' => fake()->word(),
            'keterangan' => fake()->randomElement(['Baik, Layak, Rusak']),
            'kecacatan' => fake()->sentence(),
            'jumlah' => fake()->randomNumber(3,false),
            'gambar'=> fake()->imageUrl(640, 480, 'Item', true),
        ];
    }
}
