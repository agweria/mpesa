<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaB2cPaymentResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_b2c_payment_responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('b2c_request_id');
            $table->smallInteger('ResultType');
            $table->smallInteger('ResultCode');
            $table->string('ResultDesc');
            $table->string('OriginatorConversationID');
            $table->string('ConversationID');
            $table->string('TransactionID');
            $table->timestamps();

            $table->foreign('b2c_request_id')
                ->references('id')
                ->on('mpesa_b2c_payment_requests')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mpesa_b2c_payment_responses');
    }
}
