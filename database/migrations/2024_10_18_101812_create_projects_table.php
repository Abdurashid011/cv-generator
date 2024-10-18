<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up():void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->string('link', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('projects');
    }
}

