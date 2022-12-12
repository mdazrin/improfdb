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
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ic');
            $table->text('mailing_address');
            $table->string('date_of_birth');
            $table->integer('tel_no');
            $table->integer('bank_account');
            $table->string('bank_name');
            $table->string('sex');
            $table->string('birthday_month');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_infos');
    }
};
