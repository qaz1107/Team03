<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'student_id' => 'S210001',
            'seat_number' => 1,
            'name' => '林冠宇',
            'gender' => 'M',
            'cid' => 1,
            'graduation_year' => '2019-01-01',
            'start_year' => '2020-01-01',
            'seat' => '2,0',
            'country' => '臺北',
        ]);
    }
}
