<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->string('type');
            $table->integer('number');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('body');
            $table->string('video');
            $table->string('tags');
            $table->string('time')->default('00:00:00');
            $table->integer('viewCount')->default(0);
            $table->integer('commentCount')->default(0);
            $table->integer('downloadCount')->default(0);

            $table->timestamps();

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
