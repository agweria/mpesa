<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpesaStkRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_stk_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('app_id');
            $table->string('phone');
            $table->double('amount', 10, 2);
            $table->string('reference');
            $table->string('description');
            $table->string('status')->default('Requested');
            $table->boolean('successful')->default(false);
            $table->string('MerchantRequestID')->unique();
            $table->string('CheckoutRequestID')->unique();
            $table->string('response_code', 5);
            $table->string('response_description');
            $table->string('customer_message');
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('app_id')->references('id')->on('mpesa_apps')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mpesa_stk_requests');
    }
}
