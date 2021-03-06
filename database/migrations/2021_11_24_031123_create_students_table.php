<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->string('student_id',20)->comment('學號');
            $table->tinyInteger('seat_number')->unsigned()->comment('座號');
            $table->string('name',100)->comment('姓名');
            $table->string('gender',10)->comment('性別');
            $table->foreignId('cid')->comment('班級');//foreignId
            $table->date('graduation_year')->comment('畢業年份');
            $table->date('start_year')->comment('入學年份');
            $table->string('seat',20)->comment('座位');
            $table->string('country',100)->comment('出生地');
            $table->timestamps();
            $table->foreign('cid')->references('id')->on('classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
