<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->comment('Slug value for the page.');
            $table->json('seo')->nullable()->comment('Json array of seo content.');
            $table->json('share')->nullable()->comment('Share on social media.');
            $table->json('parts')->nulable()->comment('Json array of page content.');
            $table->boolean('stauts')->default('1')->comment('0=is hidden, 1=Show');
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
        Schema::dropIfExists('pages');
    }
}
