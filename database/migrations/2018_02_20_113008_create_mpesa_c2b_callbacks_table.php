<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaC2bCallbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_c2b_callbacks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('app_id')->nullable();
            $table->string('TransactionType');
            $table->string('TransID')->unique();
            $table->string('TransTime');
            $table->double('TransAmount', 10, 2);
            $table->integer('BusinessShortCode');
            $table->string('BillRefNumber');
            $table->string('InvoiceNumber')->nullable();
            $table->string('ThirdPartyTransID')->nullable();
            $table->double('OrgAccountBalance', 10, 2);
            $table->string('MSISDN');
            $table->string('FirstName')->nullable();
            $table->string('MiddleName')->nullable();
            $table->string('LastName')->nullable();
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
        Schema::dropIfExists('mpesa_c2b_callbacks');
    }
}
