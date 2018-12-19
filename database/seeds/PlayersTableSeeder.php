<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

use App\Team;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $teams = Team::all()->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            $team_id = $faker->randomElement($teams);

            DB::table('players')->insert([
	            'team_id' => $team_id,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName
	        ]);
        }
    }
}
