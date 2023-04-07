<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		User::create([
			'email'   => 'nika@redberry.ge',
			'password'=> bcrypt('12341234'),
		]);
	}
}
