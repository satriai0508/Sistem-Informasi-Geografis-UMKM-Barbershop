<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_toko' => $this->faker->company(),
            'nama' => $this->faker->sentence(2, true),
            'harga' => $this->faker->numerify('#####')
        ];
    }
}
