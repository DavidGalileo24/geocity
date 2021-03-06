<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class City extends Migration{
    
    public function up(){
        Schema::create('city', function (Blueprint $table) {
            $table->id();
            $table->string('name', 75);
            $table->string('country', 50);
            $table->string('latitude', 20);
            $table->string('longitude', 20);
            $table->float('score');
            //$table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('city');
    }
}