<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class  ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function RandomDepartment()
    {
        $positions = ['文', '理'];
        return $positions[rand(0, count($positions) - 1)];
    }
    public function RandomClassname(){
        $positions = ['A班', 'B班'];
        return $positions[rand(0, count($positions) - 1)];
    }
    public function RandomClassroom(){
        $positions = ['C101', 'C102'];
        return $positions[rand(0, count($positions) - 1)];
    }
    public function RandomTeacher(){
        $positions = ['羅慧君', '李思聰'];
        return $positions[rand(0, count($positions) - 1)];
    }
    public function run(){
        for ($i = 0; $i < 20; $i++) {
            $department = $this->RandomDepartment();
            $classname = $this->RandomClassname();
            $classroom = $this->RandomClassroom();
            $teacher = $this->RandomTeacher();
            DB::table('classes')->insert([
                'department' => $department,
                'classname' => $classname,
                'grade' => 1,
                'classroom' => $classroom,
                'teacher' => $teacher,
            ]);
        }
    }
}
