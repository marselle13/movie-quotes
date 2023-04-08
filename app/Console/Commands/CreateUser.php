<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'create:user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$email = $this->ask('Enter email address:');
		$password = $this->secret('Enter password:');
		User::create([
			'email'    => $email,
			'password' => bcrypt($password),
		]);
		$this->info('User account created successfully!');
	}
}
