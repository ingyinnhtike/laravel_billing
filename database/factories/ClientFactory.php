<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Image;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
           'name' => $this->faker->name,
           'email' => $this->faker->email,
           'phone' => $this->faker->email,
           'address' => $this->faker->address,
           'photo' => $this->faker->imageUrl($width=600, $height=600, 'cats'),
           
        ];
    }
}
