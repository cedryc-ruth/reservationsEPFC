<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug',60);
            $table->string('designation',60);
            $table->string('address');
            $table->unsignedInteger('locality_id');
            $table->string('website')->nullable();
            $table->string('phone',30)->nullable();
            
            $table->index('locality_id');
            $table->timestamps();
            
            $table->foreign('locality_id')
                    ->references('id')
                    ->on('localities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
