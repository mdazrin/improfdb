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
        Schema::create('pas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('pas_no');
            $table->text('involvement');
            $table->string('cawangan');
            $table->string('kawasan');
            $table->string('negeri');
            $table->string('interest_one');
            $table->string('interest_two');
            $table->string('interest_three');

            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pas');
    }
};
