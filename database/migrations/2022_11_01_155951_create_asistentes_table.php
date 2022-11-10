<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistentes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('asistente_id')->unique();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("profesion")->nullable();
            $table->string("email");
            $table->string("phone")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
            $table->string("type_assist")->nullable();
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
        Schema::dropIfExists('asistentes');
    }
};
