<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug',60);
            $table->string('title');
            $table->string('poster_url')->nullable();
            $table->unsignedInteger('location_id')->nullable();
            $table->boolean('bookable')->default(1);
            $table->decimal('price',10,2);
            $table->timestamps();
            
            $table->index('location_id');
            $table->foreign('location_id')
                    ->references('id')
                    ->on('locations')
                    ->onUpdate('cascade')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shows');
    }
}
