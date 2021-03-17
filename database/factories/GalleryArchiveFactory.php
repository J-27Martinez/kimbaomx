<?php

namespace Database\Factories;

use App\GalleryArchive;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryArchiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GalleryArchive::class;

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
