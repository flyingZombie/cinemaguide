<?php

use Illuminate\Database\Seeder;
use App\Models\Cinema;

class CinemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cinemas = factory(Cinema::class)->times(20)->make();
        Cinema::insert($cinemas->toArray());
    }
}
