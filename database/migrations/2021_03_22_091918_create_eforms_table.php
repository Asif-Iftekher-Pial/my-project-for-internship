<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eforms', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->string('employee_designation');
            $table->string('employee_address');
            $table->integer('contact_information');
            $table->string('email')->unique();
            $table->string('qualification');
            $table->string('paddress');
            $table->string('employee_gender');
            $table->integer('age');
            $table->string('password');
            $table->string('image')->nullable();;
            
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
        Schema::dropIfExists('eforms');
    }
}
