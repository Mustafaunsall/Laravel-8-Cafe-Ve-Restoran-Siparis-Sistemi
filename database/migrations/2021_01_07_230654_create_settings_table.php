<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {

            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('company',150)->nullable();
            $table->string('adress',150)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('fax',25)->nullable();
            $table->string('email',50)->nullable();
            $table->string('smtpserver',75)->nullable();
            $table->string('smtpemail',75)->nullable();
            $table->string('smtppassword',15)->nullable();
            $table->integer('smtpport')->nullable()->default(0);
            $table->string('facebook',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('twitter',100)->nullable();
            $table->text('about')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->timestamps(); //create create_at , up
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
