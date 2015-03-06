<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('GamesTableSeeder');
	}

}

class GamesTableSeeder extends Seeder {

    public function run()
    {
        $user = multimediatipset\User::create([
        	'uid' => '12345',
        	'username' => 'stefanledin',
        	'email' => 'stefan.ledin@ordbild.se'
    	]);
    	$game = multimediatipset\Game::create([
    		'name' => 'Färjestad - Luleå',
    		'type' => 'resultat',
    		'status' => 1,
    		'price' => '20'
		]);
		$prediction = multimediatipset\Prediction::create([
			'prediction' => '3-1'
		]);

		#$prediction->user()->save($user);
		#$game->predictions()->save($prediction);
		
    }

}
