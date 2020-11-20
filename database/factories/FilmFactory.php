<?php

namespace Database\Factories;

use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Film::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'director'=>$this->faker->sentence,
            'rate' => $this->faker->randomDigit,
            'user_id'=>self::factoryForModel(User::class)
            ];
    }
}
