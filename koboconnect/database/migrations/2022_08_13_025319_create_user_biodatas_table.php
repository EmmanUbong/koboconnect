<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('company_photo1');
            $table->string('Gender');
            $table->string('DOB');
            $table->string('Status');
            $table->string('Address');
            $table->string('LGA');
            $table->string('State');
            $table->string('Nationality');
            $table->string('Religion');
            $table->string('Qualification');
            $table->string('Next_Of_Kin');
            $table->string('Address_Next_Of_Kin');
            $table->string('Phone_Number_Next_Of_Kin');
            $table->string('Relationship');
            $table->string('auth_user_id');
            // $table->foreignId('auth_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('user_biodatas');
    }
};
