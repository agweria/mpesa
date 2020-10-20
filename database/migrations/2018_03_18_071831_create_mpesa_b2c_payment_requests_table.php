<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaB2CPaymentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_b2c_payment_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('app_id');
            $table->string('conversation_id');
            $table->string('originator_conversation_id');
            $table->double('amount', 10, 2);
            $table->string('phone', 20);
            $table->string('remarks')->nullable();
            $table->string('CommandID')->default('BusinessPayment');
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('app_id')->references('id')->on('mpesa_apps')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mpesa_b2c_payment_requests');
    }
}
