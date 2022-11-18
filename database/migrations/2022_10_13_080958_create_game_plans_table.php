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
        Schema::create('game_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('date_time')->nullable(true);
            $table->integer('buyin')->nullable(true);
            $table->integer('total_buyin')->nullable(true);
            $table->integer('cashout')->nullable(true);
            $table->string('win_loss')->nullable(true);
            $table->integer('amount_owned')->nullable(true);
            $table->string('inital')->nullable(true);
            $table->string('image')->nullable(true);
            $table->integer('total_amount')->nullable(true);
            $table->integer('tip_amount')->nullable(true);
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
        Schema::dropIfExists('game_plans');
    }
};
