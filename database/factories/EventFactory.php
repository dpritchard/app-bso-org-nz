<?php

namespace Database\Factories;

use App\Contact;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start' => date('Y-m-d H:i:s'),
            'finish' => date('Y-m-d H:i:s', strtotime('+1 hour')),
            'title' => Str::title(' ', implode($this->faker->words())),
            'body' => $this->faker->paragraph(),
            'contact_id' => Contact::factory()->create(),
            'category_id' => Category::factory()->create(),
        ];
    }
}
