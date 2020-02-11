<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo');
            $table->text('imgs');
            $table->string('location');
            $table->string('price');
            $table->integer('sqft');
            $table->integer('bedrooms');            
            $table->integer('kitchens');            
            $table->integer('bathrooms');            
            $table->integer('garage');            
            $table->integer('garden');            
            $table->string('file');            
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
        Schema::dropIfExists('projects');
    }
}
