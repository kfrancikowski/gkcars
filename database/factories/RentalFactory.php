<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Rental;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rental::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rent_start_substract = rand(1, 14);
        $rent_end_append = rand(1, 14);
        return [
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'car_id' => Car::inRandomOrder()->first()->id,
            'rent_start_date' => $this->faker->dateTimeBetween("-$rent_start_substract days", 'now'),
            'rent_end_date' => rand(0, 1) ? $this->faker->dateTimeBetween('now', "+$rent_end_append days") : null,
        ];
    }
}