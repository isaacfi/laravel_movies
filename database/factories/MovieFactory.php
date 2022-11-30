<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Xylis\FakerCinema\Provider\Movie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Movie($faker));
        return [
            'title' => $faker->unique()->movie
        ];
    }
}
