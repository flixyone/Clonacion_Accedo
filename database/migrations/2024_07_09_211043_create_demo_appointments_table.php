<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemoAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('demo_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('email');
            $table->string('pais')->nullable();
            $table->string('organizacion');
            $table->string('posicion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('demo_appointments');
    }
}
