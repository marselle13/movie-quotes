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
		Movie::factory(10)->has(Quote::factory(2))->create();
		User::create([
			'email'    => 'admin@admin.com',
			'password' => bcrypt('12341234'),
		]);
	}
}
