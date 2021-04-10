<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);
        $this->call(TrainerSeeder::class);
        // $queryCompanies = "insert into companies values (?,?,?,?,?,?)";
        // $queryTrainers = "insert into trainers values (?,?,?,?,?)";
        // for ($i = 0; $i < 1000000; $i++) {
        //     DB::insert($queryCompanies,[null,'a','a','a','a','a']);
        //     DB::insert($queryTrainers,[null,'a','a','a','1']);
        //     // DB::table('companies')->insert([
        //     //     'company_name' => 'a',
        //     //     'company_web' => 'aa',
        //     //     'company_address' => 'a',
        //     //     'company_code' => 'a',
        //     //     'company_phone' => 'a'
        //     // ]);
        //     // DB::table('trainers')->insert([
        //     //     'trainer_name' => 'a',
        //     //     'trainer_email' => 'aa',
        //     //     'trainer_phone' => 'a',
        //     //     'company_id' => '1'
        //     // ]);
        // }

        // $this->call(CompanySeeder::class);
        // DB::table('users')->insert([
        //     'name' => 'hihi',
        //     'email' => 'hihi',
        //     'password' => '1',
        // ]);
        // $this->call(UsersTableSeeder::class);
    }
}
