<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function RandomStudentId(){
        $first = rand(210001,210020);
        $student_id = 'S' . $first;
        return $student_id;
    }
    public function RandomName(){
        $positions = ['林冠宇','赵秀秀','許鴻文','许慧语','戴鸿洁','梁幼萱','郑乐成','邵南莲','于明远','吕宜欣'
                     ,'韩初瑶','彭正志','孟白梅','阎浩丽','张建弼','梁帅红','毛倩美','堵翔宇','宋静恬','梁浩宕'];
        return $positions[rand(0,count($positions)-1)];
    }
    public function RandomGender(){
        $positions = ['M','F'];
        return $positions[rand(0,count($positions)-1)];
    }
    public function RandomSeat(){
        $first = rand(0,2);
        $last =rand(0,3);
        $seat = $first . "," . $last;
        return $seat;
    }
    public function RandomCountry(){
        $positions = ['基隆市','台北市','新北市','桃園市','新竹市','新竹縣'
                      ,'苗栗市','苗栗縣','台中市','彰化市','彰化縣','雲林縣','南投市','南投縣'
                      ,'嘉義市','嘉義縣','台南市','高雄市','屏東市','屏東縣','宜蘭市','花蓮市'
                      ,'花蓮縣','台東市','台東縣','澎湖縣','金門縣','連江縣','綠島','蘭嶼','馬祖'];
        return $positions[rand(0,count($positions)-1)];
    }
    public function run()
    {
        for ($i=0;$i<20;$i++){
            $student_id = $this->RandomStudentId();
            $seat_number = rand(1,10);
            $name = $this->RandomName();
            $gender= $this->RandomGender();
            $graduation_year = Carbon::now()->subYears(rand(11,15))->subMonths(rand(0,12))->subRealDays(rand(0,31));
            $start_year = Carbon::now()->subYears(rand(4,10))->subMonths(rand(0,12))->subRealDays(rand(0,31));
            $seat = $this->RandomSeat();
            $country = $this->RandomCountry();
            DB::table('students')->insert([
                'student_id' => $student_id,
                'seat_number' => $seat_number,
                'name' => $name,
                'gender' => $gender,
                'cid' => rand(1,2),
                'graduation_year' => $graduation_year,
                'start_year' => $start_year,
                'seat' => $seat,
                'country' => $country,
            ]);
        }
    }
}
