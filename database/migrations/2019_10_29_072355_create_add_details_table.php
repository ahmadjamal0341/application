<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
             $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('adress');
             $table->string('zip');
             $table->string('pic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_details');
    }
}
