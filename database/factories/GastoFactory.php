<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Categoria;
use \App\Models\Pago;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gasto>
 */

class GastoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'detalle' => fake()->sentence(),
            'importe' =>fake()->randomFloat(2, 1, 100000),
            'fecha' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'fijo' => fake()->numberBetween(0, 100),
            // necesito la id de caterogoria que no se como obtenerla que no sea mediante fake sino por relacion
            'categoria_id' => function(){
                // return Categoria::select('id')->inRandomOrder()->first();
                return Categoria::inRandomOrder()->first()->id;
            },
            'pago_id' => function(){
                // return Pago::select('id')->inRandomOrder()->first();
                return Pago::inRandomOrder()->first()->id;
            }
        ];
    }
}
    