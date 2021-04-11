let s1 = `<?php

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
        $query = "insert into trainers values (null,?,?,?,?)";
        for($i=0;$i<1000000;$i++){
            DB::insert($query,['tien',1,'tien','tien']);
        }
    }
}`;

let s2 = `<?php

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
        $query = "insert into trainers value (null,?,?,?,?)";
        for ($i = 0; $i < 1000000; $i++) {
            DB::insert($queryTrainers,['a','a','a',1]);
        }

    }
}`

for (let i = 0; i < s2.length; i++) {
    if (s1[i]!=s2[i]) {
        console.log(s1[i])
    }
}