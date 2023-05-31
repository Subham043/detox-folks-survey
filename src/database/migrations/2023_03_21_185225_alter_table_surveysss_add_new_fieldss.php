<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSurveysssAddNewFieldss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->bigInteger('pp_week_200_g')->default(0);
            $table->bigInteger('pp_week_300_g')->default(0);
            $table->bigInteger('pp_month_200_g')->default(0);
            $table->bigInteger('pp_month_300_g')->default(0);
            $table->bigInteger('pp_price_200_g')->default(0);
            $table->bigInteger('pp_price_300_g')->default(0);
            $table->bigInteger('cloth_bag_week_small')->default(0);
            $table->bigInteger('cloth_bag_week_medium')->default(0);
            $table->bigInteger('cloth_bag_week_large')->default(0);
            $table->bigInteger('cloth_bag_month_small')->default(0);
            $table->bigInteger('cloth_bag_month_medium')->default(0);
            $table->bigInteger('cloth_bag_month_large')->default(0);
            $table->bigInteger('cloth_bag_price_small')->default(0);
            $table->bigInteger('cloth_bag_price_medium')->default(0);
            $table->bigInteger('cloth_bag_price_large')->default(0);
            $table->bigInteger('paper_straw_week_6mm')->default(0);
            $table->bigInteger('paper_straw_week_8mm')->default(0);
            $table->bigInteger('paper_straw_month_6mm')->default(0);
            $table->bigInteger('paper_straw_month_8mm')->default(0);
            $table->bigInteger('paper_straw_price_6mm')->default(0);
            $table->bigInteger('paper_straw_price_8mm')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surveys', function (Blueprint $table) {
            //
        });
    }
}
