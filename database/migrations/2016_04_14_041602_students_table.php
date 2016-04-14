<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id')->unique();;
            $table->string('password');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('address');
            $table->string('course');
            $table->string('yearLevel');
            $table->string('gender');
            $table->string('religion');
            $table->integer('contactNo');
            $table->string('motto');
            $table->integer('penalty');
            $table->rememberToken();
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
        Schema::drop('students');
    }
}
