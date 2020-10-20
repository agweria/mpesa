<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaStkCallbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_stk_callbacks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mpesa_stk_request_id');
            $table->integer('ResultCode');
            $table->string('ResultDesc');
            $table->double('Amount', 10, 2)->nullable();
            $table->string('MpesaReceiptNumber')->nullable();
            $table->string('Balance')->nullable()->nullable();
            $table->string('TransactionDate')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->timestamps();
            $table->foreign('mpesa_stk_request_id')
                ->references('id')
                ->on('mpesa_stk_requests')
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
        Schema::dropIfExists('mpesa_stk_callbacks');
    }
}
