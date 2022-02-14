<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('city', 50);
            $table->string('state', 50);
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('bathrooms')->unsigned();
            $table->string('type_of', 50);
            $table->text('description')->nullable();
            $table->decimal('price_flight', 8, 2);
            $table->decimal('price_hotel', 8, 2);
            $table->decimal('price_total', 8, 2);
            $table->tinyInteger('is_available')->unsigned()->default(1);
            $table->tinyInteger('all_inclusive')->unsigned()->default(1);
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
        Schema::dropIfExists('destinations');
    }
}
