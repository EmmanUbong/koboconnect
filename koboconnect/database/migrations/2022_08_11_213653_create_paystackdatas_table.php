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
        Schema::create('paystackdatas', function (Blueprint $table) {
            $table->id();
            $table->string('email');
        
            $table->string('status');
            $table->string('reference');
            $table->string('amount');
            $table->string('channel');
            $table->string('currency');
            $table->string('transaction_date');
            $table->string('ip_address');
            $table->string('fees');
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
        Schema::dropIfExists('paystackdatas');
    }
};
