<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;

class MovieFactory extends Factory
{
    protected $model = Movie::class;

    // private $genres = [ 'action', 'comedy', 'sci-fi', 'horror', 'thriller'];
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'director' => $this->faker->name,
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/I/51wILNNX2VL._AC_SY445_.jpg',
            'duration' => $this->faker->randomFloat(0, 30, 300),
            'release_date' => $this->faker->date(),
            'genre' => 'sci-fi',
        ];
    }
}
