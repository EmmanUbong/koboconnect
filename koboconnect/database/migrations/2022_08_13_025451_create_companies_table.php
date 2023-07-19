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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('company_name');
            $table->string('artisan_type');
            $table->string('business_description');
            $table->string('business_services1');
            $table->string('business_services2');
            $table->string('business_services3');
            $table->string('business_services4');
            $table->string('company_address');
            $table->string('lga');
            $table->string('State');
            $table->string('nationality');
            $table->string('company_phone_number');
            $table->string('monday');
            $table->string('tuesday');
            $table->string('wedsday');
            $table->string('thursday');
            $table->string('friday');
            $table->string('saturday');
            $table->string('sunday');
            $table->string('company_photo1');
            $table->string('company_photo2');
            $table->string('company_photo3');
            $table->string('video');
            $table->string('facebook');
            $table->string('twiter');
            $table->string('instagram');
            $table->string('whatsapp');
            $table->string('auth_user_id');
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
        Schema::dropIfExists('companies');
    }
};
