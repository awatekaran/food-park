<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' =>'upload/test',
            'offer'=>fake()->sentence(10),
            'title'=>fake()->sentence(10),
            'sub_title'=>fake()->sentence(10),
            'short_description'=>fake()->sentence(10),
            'button_link'=>fake()->url(10),
            'status'=>fake()->boolean(),
        ];
    }
}
