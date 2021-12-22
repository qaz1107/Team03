<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->string('department',50)->comment('系別');
            $table->string('classname',10)->comment('班級名稱');
            $table->integer('grade')->unsigned()->comment('年級');
            $table->string('classroom',50)->comment('教室');
            $table->string('teacher',100)->comment('班導');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
