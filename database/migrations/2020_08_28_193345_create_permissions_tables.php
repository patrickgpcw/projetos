<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions_tables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id');
            $table->string('name');
            $table->boolean('create');
            $table->boolean('read');
            $table->boolean('update');
            $table->boolean('delete');
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
        Schema::dropIfExists('permissions_tables');
    }
}
