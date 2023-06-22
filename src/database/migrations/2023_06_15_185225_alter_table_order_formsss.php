<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableOrderFormsss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_forms', function (Blueprint $table) {
            $table->bigInteger('paper_cup_90')->default(0);
            $table->bigInteger('paper_cup_100')->default(0);
            $table->bigInteger('paper_cup_110')->default(0);
            $table->bigInteger('paper_cup_210')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_forms', function (Blueprint $table) {
            //
        });
    }
}
