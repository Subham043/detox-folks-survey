<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSurveysssAddNewFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->bigInteger('carry_bag_bag_week_small')->default(0);
            $table->bigInteger('carry_bag_bag_week_medium')->default(0);
            $table->bigInteger('carry_bag_bag_week_large')->default(0);
            $table->bigInteger('carry_bag_bag_week_x_large')->default(0);
            $table->bigInteger('carry_bag_bag_month_small')->default(0);
            $table->bigInteger('carry_bag_bag_month_medium')->default(0);
            $table->bigInteger('carry_bag_bag_month_large')->default(0);
            $table->bigInteger('carry_bag_bag_month_x_large')->default(0);
            $table->bigInteger('carry_bag_bag_price_small')->default(0);
            $table->bigInteger('carry_bag_bag_price_medium')->default(0);
            $table->bigInteger('carry_bag_bag_price_large')->default(0);
            $table->bigInteger('carry_bag_bag_price_x_large')->default(0);
            $table->bigInteger('rubber_band_week_1')->default(0);
            $table->bigInteger('rubber_band_month_1')->default(0);
            $table->bigInteger('rubber_band_price_1')->default(0);
            $table->bigInteger('butter_paper_week_12')->default(0);
            $table->bigInteger('butter_paper_month_12')->default(0);
            $table->bigInteger('butter_paper_price_12')->default(0);
            $table->bigInteger('parcel_paper_week_12')->default(0);
            $table->bigInteger('parcel_paper_month_12')->default(0);
            $table->bigInteger('parcel_paper_price_12')->default(0);
            $table->bigInteger('parcel_paper_week_14')->default(0);
            $table->bigInteger('parcel_paper_month_14')->default(0);
            $table->bigInteger('parcel_paper_price_14')->default(0);
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
