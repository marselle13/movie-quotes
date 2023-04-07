<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		$fakerKa = \Faker\Factory::create('ka_GE');
		return [
			'name' => ['en' => fake()->sentence,
				'ka'           => $fakerKa->realText(10)],
			'slug' => fake()->unique()->slug,
		];
	}
}
