<?php

namespace Database\Factories;

use App\GaleryArchive;
use Illuminate\Database\Eloquent\Factories\Factory;

class GaleryArchiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GaleryArchive::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'excerpt' => '<p>'.$this->faker->sentence.'</p>',
        ];
    }
}
