<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ActorMovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $actor_count = Actor::all()->count();
        $movie_count = Movie::all()->count();

        $actor_moviee = [];
        for ($i = 1; $i <= $actor_count; $i++) {
            for ($j = 1; $j <= $movie_count; $j++) {
                array_push($actor_moviee, $i . "-" . $j);
            }
        }

        $actor_and_movies = $this->faker->unique->randomElement($actor_moviee);

        $actor_and_movie = explode('-', $actor_and_movies);
        $actor_id = $actor_and_movie[0];
        $movie_id = $actor_and_movie[1];
        $faker = \Faker\Factory::create();
        $unique = $faker->unique();
        return [
            'actor_id' => $actor_id,
            'movie_id' => $movie_id,
        ];
    }
}
