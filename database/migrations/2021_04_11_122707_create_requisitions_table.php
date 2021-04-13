<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitions', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('user_id')->nullable();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('pincode');
            $table->string('hospital_name');
            $table->string('patient_name');
            $table->string('contact_name');
            //,['1'=>'Blood','2'=>'RBC','Plasma','Platelate','Cryo precipitate','F.F.P','Washed R.B.C','Others'])->nullable();//bloodd plazma or anything else.
            $table->integer('donation_type')->default('1');
            //['A+', 'A-', 'B+', 'B-', 'O+', 'O-','AB+','AB-',]);//A+ = 1, 
            $table->tinyInteger('blood_group');
            $table->tinyInteger('unit');
            $table->string('contact');
            $table->string('alternate_contact')->nullable();            
            $table->timestamp('when_wanted');
            $table->text('message')->nullable();
            //Requisition's state //
            $table->tinyInteger('status')->default('1')->comment('new Request,Active,being reviewd,accepted,converted to case, archived. sent to deletation');
            $table->string('img')->nullable();
            $table->tinyInteger('priority')->default('0')->comment("'0'=>'Normal Priority','1'=>'Urgent Priority','2'=>'Emergency','3'=>'Critical'");
            // This will record the donations list for current requisition.
            $table->json('donations')->nullable();
            $table->json('seo')->nullable()->comment('Json array of seo content.');
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
        Schema::dropIfExists('requisitions');
    }
}
