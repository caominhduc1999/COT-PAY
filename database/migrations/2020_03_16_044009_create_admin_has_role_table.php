<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminHasRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_has_role', function (Blueprint $table) {
            $table->bigInteger('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admins')->onDelete('cascade');
            $table->bigInteger('id_role')->unsigned();
            $table->foreign('id_role')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_has_role');
    }
}
