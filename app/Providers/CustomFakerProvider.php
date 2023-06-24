<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomFakerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function customName()
    {
        // Implementa la lógica para generar un nombre personalizado
        // Puede ser una combinación de diferentes métodos de generación de Faker
        // Por ejemplo, puedes combinar el primer nombre y el apellido generado por Faker

        $firstName = $this->firstName();
        $lastName = $this->lastName();

        return $firstName . ' ' . $lastName;
    }
}
