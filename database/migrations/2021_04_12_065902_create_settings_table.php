<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('details')->nullable();
            $table->string('logo')->nullable();
            $table->string('registration_number')->nullable();
            // Website stats will be update here.
            $table->json('stats')->nullable();
            // Store images and documents user php artisan storage:link to link to make a sys link
            $table->tinyInteger('document_hosting')->default(0)->comment('0=>local storage, 1=>cloudnary');
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
        Schema::dropIfExists('settings');
    }
}
