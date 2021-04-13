<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('username')->unique();
            $table->string('mobile')->unique();
            $table->string('other_contact')->nullable();
            // Bloodgroup must not be null
            $table->tinyInteger('blood_group');
            $table->boolean('is_donor')->default(1);
            $table->boolean('is_admin')->default(0);
            $table->unsignedBigInteger('pincode_id')->nullable();
            $table->timestamp('last_donated')->nullable();
            $table->timestamp('can_not_donate_until')->nullable();
            $table->string('avatar')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
