<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftSkillsTable extends Migration
{
    public function up():void
    {
        Schema::create('soft_skills', function (Blueprint $table) {
            $table->id();
            $table->string('skill_name', 255);
            $table->text('description')->nullable();
            $table->integer('level')->nullable();
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('soft_skills');
    }
}

