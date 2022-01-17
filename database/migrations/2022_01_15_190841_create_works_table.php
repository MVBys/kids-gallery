<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('contest_id');
            $table->foreign('contest_id')->references('id')->on('contests');
            $table->string('title');
            $table->string('file');
            $table->string('participant_name');
            $table->string('particapant_lastname');
            $table->double('sum_of_points', 8, 2);
            $table->integer('number_of_votes');
            $table->integer('like');
            $table->integer('dislike');
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
