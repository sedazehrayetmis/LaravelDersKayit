<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ders', function (Blueprint $table) {
            $table->id();
            $table->string('CODE')->unique();
            $table->string('NAME',50);
            $table->boolean('ISMANDATORY');
            $table->string('DAY');
            $table->time('HOUR');
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
        Schema::dropIfExists('ders');
    }
}
