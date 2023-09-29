<?php

namespace Database\Factories;

use App\Models\Mechanic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => collect([
                                "Toyota",
                                "Honda",
                                "Ford",
                                "Chevrolet",
                                "Volkswagen",
                                "Nissan",
                                "BMW",
                                "Mercedes-Benz",
                                "Audi",
                                "Hyundai",
                                "Kia",
                                "Lexus",
                                "Subaru",
                                "Mazda",
                                "Jeep",
                                "Volvo",
                                "Tesla",
                                "Ferrari",
                                "Porsche",
                                "Jaguar",
                            ])->random(),
            'mechanic_id' => Mechanic::factory(),
        ];
    }
}