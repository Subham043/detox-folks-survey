<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSurveysssAddNewFieldsss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->bigInteger('pp_week_500_g')->default(0);
            $table->bigInteger('pp_week_750_flat')->default(0);
            $table->bigInteger('pp_month_500_g')->default(0);
            $table->bigInteger('pp_month_750_flat')->default(0);
            $table->bigInteger('pp_price_500_g')->default(0);
            $table->bigInteger('pp_price_750_flat')->default(0);
            $table->bigInteger('p_bag_week_xx_large')->default(0);
            $table->bigInteger('p_bag_month_xx_large')->default(0);
            $table->bigInteger('p_bag_price_xx_large')->default(0);
            $table->bigInteger('parcel_paper_week_15')->default(0);
            $table->bigInteger('parcel_paper_month_15')->default(0);
            $table->bigInteger('parcel_paper_price_15')->default(0);
            $table->bigInteger('toothpick_week_12')->default(0);
            $table->bigInteger('toothpick_month_12')->default(0);
            $table->bigInteger('toothpick_price_12')->default(0);
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
