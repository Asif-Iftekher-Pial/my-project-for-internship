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
            $table->integer('user_id');
            $table->string('employee_address');
            $table->integer('contact_information');
            $table->string('qualification');
            $table->string('paddress');
            $table->string('employee_gender');
            $table->integer('age');
            $table->integer('salary');
            $table->string('image')->nullable();
            $table->string('status')->default('Inactive');
            
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
