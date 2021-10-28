<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;


class BillingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $client = Client::find(rand(1,15));
        return [
            'amount' => rand(50000, 500000),
            'due_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'client_id' => $client->id,
            'description' => $this->faker->paragraph(),
          
         ];
    }
}
