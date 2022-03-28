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
            $table->id();
            $table->string('name')->nullable();    
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->longText('number')->nullable();
            $table->longText('registration')->nullable();
            $table->longText('barcode')->nullable();
            $table->string('cgpa')->nullable();
            $table->string('typeofstudy')->nullable();
            $table->string('semester')->nullable();
            $table->string('AA')->nullable();
            $table->string('graduated')->nullable();
            $table->string('degreename')->nullable();
            $table->string('departmentname')->nullable();
            $table->string('activity')->nullable();
            $table->string('award')->nullable();
            $table->string('pdffile')->nullable();
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
        Schema::dropIfExists('students');
    }
}
