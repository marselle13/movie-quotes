<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		Movie::factory(10)
			->has(Quote::factory(4))
			->create();
		User::create([
			'email'   => 'nika@redberry.ge',
			'password'=> bcrypt('12341234'),
		]);
	}
}
