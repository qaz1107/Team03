<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('classes')->insert([
            'department'=> '文',
            'classname'=> 'A班',
            'grade'=> 1,
            'classroom'=> 'C101',
            'teacher'=> '羅慧君',
        ]);
    }
}
