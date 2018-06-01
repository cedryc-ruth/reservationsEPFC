<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('show_id')->index();
            $table->dateTime('when');
            $table->unsignedInteger('location_id')->index();

            $table->foreign('show_id')
                    ->references('id')->on('shows');
            $table->foreign('location_id')
                    ->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representations');
    }
}
