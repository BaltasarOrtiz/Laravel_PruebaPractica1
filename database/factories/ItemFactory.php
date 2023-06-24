<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Gasto;

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
            //
            'nombre' => fake()->unique()->randomElement(
                ['Pantalon',
                'Papas',
                'Coca Cola',
                'Pizza napolitana',
                'Perfume One Million Dollar']
            ),
            'importe' => fake()->randomFloat(2, 10, 100000),
            'gastos_id' => function(){
                return Gasto::select('id')->inRandomOrder()->first();
            }
        ];
    }
}
