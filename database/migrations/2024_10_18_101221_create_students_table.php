<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up():void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->bigInteger('nt_id')->nullable();
            $table->string('photo', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('profession', 255)->nullable();
            $table->text('biography')->nullable();
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down():void
    {
        Schema::dropIfExists('students');
    }
}

