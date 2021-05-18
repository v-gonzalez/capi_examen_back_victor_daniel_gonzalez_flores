<?php

namespace Database\Factories;

use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserDomicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->name() . ' ' . (rand(1000, 9999)),
            'numero_exterior' => rand(1000, 9999),
            'colonia' => $this->faker->name(),
            'cp' => rand(10000, 99999),
            'ciudad' => $this->faker->name(),
        ];
    }
}
