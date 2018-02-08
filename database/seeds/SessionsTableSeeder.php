<?php

use Illuminate\Database\Seeder;
use App\Models\Session;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Faker\Generator::class);
        $cinema_ids = ['1', '2', '3', '4', '5'];
        $movie_ids = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

        $sessions = factory(Session::class)->times(100)->make()->each(
            function ($session) use ($faker, $cinema_ids, $movie_ids){
            $session->cinema_id = $faker->randomElement($cinema_ids);
            $session->movie_id = $faker->randomElement($movie_ids);
        });
        Session::insert($sessions->toArray());
    }
}
