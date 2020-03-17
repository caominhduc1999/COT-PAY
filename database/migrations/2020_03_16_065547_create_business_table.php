<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('name_company');
            $table->string('name_represent');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->unique();
            $table->string('tax_code')->unique();
            $table->string('address');
            $table->string('image');
            $table->bigInteger('id_city')->unsigned();
            $table->foreign('id_city')->references('id')->on('city')->onDelete('cascade');
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
        Schema::dropIfExists('business');
    }
}
