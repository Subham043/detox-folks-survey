<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceColumnInSurveys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->bigInteger('pp_price_100')->default(0);
            $table->bigInteger('pp_price_250')->default(0);
            $table->bigInteger('pp_price_300')->default(0);
            $table->bigInteger('pp_price_500')->default(0);
            $table->bigInteger('pp_price_750')->default(0);
            $table->bigInteger('pp_price_1000')->default(0);
            $table->bigInteger('compartment_price_2cp')->default(0);
            $table->bigInteger('compartment_price_3cp')->default(0);
            $table->bigInteger('compartment_price_4cp')->default(0);
            $table->bigInteger('compartment_price_5cp')->default(0);
            $table->bigInteger('compartment_price_6cp')->default(0);
            $table->bigInteger('compartment_price_8cp')->default(0);
            $table->bigInteger('al_container_without_lid_price_250')->default(0);
            $table->bigInteger('al_container_without_lid_price_450')->default(0);
            $table->bigInteger('al_container_without_lid_price_600')->default(0);
            $table->bigInteger('al_container_without_lid_price_660')->default(0);
            $table->bigInteger('al_container_without_lid_price_750')->default(0);
            $table->bigInteger('al_container_without_lid_price_900')->default(0);
            $table->bigInteger('al_container_without_lid_price_3cp')->default(0);
            $table->bigInteger('al_container_without_lid_price_100')->default(0);
            $table->bigInteger('al_container_without_lid_price_120')->default(0);
            $table->bigInteger('al_container_without_lid_price_muffin')->default(0);
            $table->bigInteger('al_container_with_lid_price_250')->default(0);
            $table->bigInteger('al_container_with_lid_price_450')->default(0);
            $table->bigInteger('al_container_with_lid_price_600')->default(0);
            $table->bigInteger('al_container_with_lid_price_750')->default(0);
            $table->bigInteger('p_box_price_cake')->default(0);
            $table->bigInteger('p_box_price_dosa')->default(0);
            $table->bigInteger('p_box_price_sandwich')->default(0);
            $table->bigInteger('p_bag_price_small')->default(0);
            $table->bigInteger('p_bag_price_medium')->default(0);
            $table->bigInteger('p_bag_price_large')->default(0);
            $table->bigInteger('p_bag_price_x_large')->default(0);
            $table->bigInteger('groccery_bag_price_50')->default(0);
            $table->bigInteger('groccery_bag_price_100')->default(0);
            $table->bigInteger('groccery_bag_price_150')->default(0);
            $table->bigInteger('groccery_bag_price_200')->default(0);
            $table->bigInteger('groccery_bag_price_250')->default(0);
            $table->bigInteger('groccery_bag_price_300')->default(0);
            $table->bigInteger('groccery_bag_price_500')->default(0);
            $table->bigInteger('groccery_bag_price_1')->default(0);
            $table->bigInteger('groccery_bag_price_1_5')->default(0);
            $table->bigInteger('groccery_bag_price_2')->default(0);
            $table->bigInteger('groccery_bag_price_3')->default(0);
            $table->bigInteger('groccery_bag_price_4')->default(0);
            $table->bigInteger('groccery_bag_price_5')->default(0);
            $table->bigInteger('garbage_bag_price_small')->default(0);
            $table->bigInteger('garbage_bag_price_medium')->default(0);
            $table->bigInteger('garbage_bag_price_large')->default(0);
            $table->bigInteger('garbage_bag_price_x_large')->default(0);
            $table->bigInteger('tissue_price_22_22')->default(0);
            $table->bigInteger('tissue_price_27_30')->default(0);
            $table->bigInteger('tissue_price_30_30')->default(0);
            $table->bigInteger('tissue_price_32_32')->default(0);
            $table->bigInteger('tissue_price_40_40')->default(0);
            $table->bigInteger('cuttlery_price_110_spoon')->default(0);
            $table->bigInteger('cuttlery_price_140_spoon')->default(0);
            $table->bigInteger('cuttlery_price_160_spoon')->default(0);
            $table->bigInteger('cuttlery_price_140_fork')->default(0);
            $table->bigInteger('cuttlery_price_160_fork')->default(0);
            $table->bigInteger('aluminium_price_9mtr')->default(0);
            $table->bigInteger('aluminium_price_18mtr')->default(0);
            $table->bigInteger('aluminium_price_72mtr')->default(0);
            $table->bigInteger('aluminium_price_72nbr')->default(0);
            $table->bigInteger('aluminium_price_72spc')->default(0);
            $table->bigInteger('aluminium_price_25g')->default(0);
            $table->bigInteger('aluminium_price_50g')->default(0);
            $table->bigInteger('aluminium_price_120g')->default(0);
            $table->bigInteger('aluminium_price_1kg_gross')->default(0);
            $table->bigInteger('aluminium_price_1kg_net')->default(0);
            $table->bigInteger('al_pouch_price_3_5')->default(0);
            $table->bigInteger('al_pouch_price_4_6')->default(0);
            $table->bigInteger('al_pouch_price_5_7')->default(0);
            $table->bigInteger('al_pouch_price_6_8')->default(0);
            $table->bigInteger('al_pouch_price_6_9')->default(0);
            $table->bigInteger('al_pouch_price_7_9')->default(0);
            $table->bigInteger('al_pouch_price_7_10')->default(0);
            $table->bigInteger('al_pouch_price_8_10')->default(0);
            $table->bigInteger('al_pouch_price_9_12')->default(0);
            $table->bigInteger('al_pouch_price_10_12')->default(0);
            $table->bigInteger('al_pouch_price_10_14')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surveys', function (Blueprint $table) { });
    }
}
