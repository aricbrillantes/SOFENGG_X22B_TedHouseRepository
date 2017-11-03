<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('study'); // Name of study
            $table->string('author'); // Name of author
            $table->timestamp('date_started')->nullable(); // date started (if finished)
            $table->timestamp('date_released')->nullable(); // date released (if ongoing)
            $table->timestamp('date_removed')->nullable(); // date removed (if unfinished)
            $table->enum('tag', []); //tags
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
        Schema::dropIfExists('works');
    }
}
