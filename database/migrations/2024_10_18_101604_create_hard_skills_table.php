<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardSkillsTable extends Migration
{
    public function up():void
    {
        Schema::create('hard_skills', function (Blueprint $table) {
            $table->id();
            $table->integer('homework')->nullable();
            $table->integer('participation')->nullable();
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('hard_skills');
    }
}

