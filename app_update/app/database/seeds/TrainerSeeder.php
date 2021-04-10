<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $queryTrainers='insert into trainers value (null,?,?,?,?)';
        for ($i = 0; $i < 1000000; $i++) {
            DB::insert($queryTrainers,['a','a','a',1]);
        }

    }
}
