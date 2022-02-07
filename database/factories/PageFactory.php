<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $n = $this->faker->numberBetween($min = 1, $max = 5);

        return [
            'uri' => implode('/', $this->faker->unique()->words($nb = $n)),
            'title' => Str::title(' ', implode($this->faker->words())),
            'body' => $this->faker->paragraph(),
        ];
    }
}
