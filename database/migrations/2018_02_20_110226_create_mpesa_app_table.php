<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shortcode', 10);
            $table->double('environment', ['sandbox', 'production']);
            $table->boolean('enable_b2c')->default(false);
            $table->boolean('enable_b2b')->default(false);
            $table->string('consumer_key', 100);
            $table->string('consumer_secret', 100);
            $table->string('passkey')->nullable();
            $table->string('initiator_username')->nullable();
            $table->text('security_password')->nullable();
            $table->boolean('enabled')->default(true);
            $table->timestamps();
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
        Schema::dropIfExists('mpesa_apps');
    }
}
