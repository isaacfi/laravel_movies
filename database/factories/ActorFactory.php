<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Xylis\FakerCinema\Provider\Person;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Person($faker));
        return [
            'name' => $faker->unique()->actor
        ];
    }
}
