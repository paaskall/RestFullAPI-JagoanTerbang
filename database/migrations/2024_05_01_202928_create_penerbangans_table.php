<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerbanganTable extends Migration
{
    public function up()
    {
        Schema::create('penerbangan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date_of_journey');
            $table->string('source');
            $table->string('destination');
            $table->string('transit')->nullable();
            $table->time('dep_time');
            $table->time('arrival_time');
        });
    }

    public function down()
    {
        Schema::dropIfExists('penerbangan');
    }
}

