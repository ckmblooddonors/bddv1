<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitionCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisition_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedbigInteger('requisition_id');
            // $table->foreign('requisition_id')->references('id')->on('requisitions');
            $table->text('comment');
            $table->tinyInteger('request_type')->defaule(0)->comment('0=>"Comments",1=>"Blood Donation.",2="Other Type Of donation."');
            // Store status of the request null if not a request
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('requisition_comments');
    }
}
