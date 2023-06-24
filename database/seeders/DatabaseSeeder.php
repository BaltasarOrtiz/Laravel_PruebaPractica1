<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Categoria;
use \App\Models\Etiqueta;
use \App\Models\Pago;
use \App\Models\Gasto;
use \App\Models\Item;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();
        Categoria::factory(5)->create();
        Etiqueta::factory(5)->create();
        Pago::factory(10)->create();
        Gasto::factory(10)->create();
        Item::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
