<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableOrderForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_forms', function (Blueprint $table) {
            $table->bigInteger('pp_50_color')->default(0);
            $table->bigInteger('pp_100_color')->default(0);
            $table->bigInteger('pp_150_color')->default(0);
            $table->bigInteger('pp_250_color')->default(0);
            $table->bigInteger('pp_300_color')->default(0);
            $table->bigInteger('pp_200_g_color')->default(0);
            $table->bigInteger('pp_500_color')->default(0);
            $table->bigInteger('pp_500_g_color')->default(0);
            $table->bigInteger('pp_750_color')->default(0);
            $table->bigInteger('pp_750_flat_color')->default(0);
            $table->bigInteger('pp_1000_color')->default(0);
            $table->bigInteger('pp_500_rec_color')->default(0);
            $table->bigInteger('pp_650_rec_color')->default(0);
            $table->bigInteger('pp_750_rec_color')->default(0);
            $table->bigInteger('pp_1000_rec_color')->default(0);
            $table->bigInteger('pp_650_bowl_color')->default(0);
            $table->bigInteger('compartment_2cp_color')->default(0);
            $table->bigInteger('compartment_3cp_color')->default(0);
            $table->bigInteger('compartment_3cp_xl_color')->default(0);
            $table->bigInteger('compartment_4cp_color')->default(0);
            $table->bigInteger('compartment_5cp_color')->default(0);
            $table->bigInteger('compartment_6cp_color')->default(0);
            $table->bigInteger('compartment_8cp_color')->default(0);
            $table->bigInteger('compartment_750_bow_color')->default(0);
            $table->bigInteger('bopp_tape_2_color')->default(0);
            $table->bigInteger('bopp_tape_3_color')->default(0);
            $table->bigInteger('mask_3_play')->default(0);
            $table->bigInteger('mask_meltblown')->default(0);
            $table->bigInteger('head_cap_16_10')->default(0);
            $table->bigInteger('head_cap_18_10')->default(0);
            $table->bigInteger('head_cap_21_10')->default(0);
            $table->bigInteger('gloves_regular')->default(0);
            $table->bigInteger('carry_bag_bag_small')->default(0);
            $table->bigInteger('carry_bag_bag_medium')->default(0);
            $table->bigInteger('carry_bag_bag_large')->default(0);
            $table->bigInteger('carry_bag_bag_x_large')->default(0);
            $table->bigInteger('cuttlery_110_spoon')->default(0);
            $table->bigInteger('cuttlery_140_spoon')->default(0);
            $table->bigInteger('cuttlery_160_spoon')->default(0);
            $table->bigInteger('cuttlery_140_fork')->default(0);
            $table->bigInteger('cuttlery_160_fork')->default(0);
            $table->bigInteger('parcel_paper_10')->default(0);
            $table->bigInteger('parcel_paper_12')->default(0);
            $table->bigInteger('parcel_paper_14')->default(0);
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
