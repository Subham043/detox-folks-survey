<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('designation')->nullable();
            $table->text('address')->nullable();
            $table->bigInteger('pp_50')->default(0);
            $table->bigInteger('pp_100')->default(0);
            $table->bigInteger('pp_150')->default(0);
            $table->bigInteger('pp_250')->default(0);
            $table->bigInteger('pp_300')->default(0);
            $table->bigInteger('pp_200_g')->default(0);
            $table->bigInteger('pp_500')->default(0);
            $table->bigInteger('pp_500_g')->default(0);
            $table->bigInteger('pp_750')->default(0);
            $table->bigInteger('pp_750_flat')->default(0);
            $table->bigInteger('pp_1000')->default(0);
            $table->bigInteger('pp_500_rec')->default(0);
            $table->bigInteger('pp_650_rec')->default(0);
            $table->bigInteger('pp_750_rec')->default(0);
            $table->bigInteger('pp_1000_rec')->default(0);
            $table->bigInteger('pp_650_bowl')->default(0);
            $table->bigInteger('compartment_2cp')->default(0);
            $table->bigInteger('compartment_3cp')->default(0);
            $table->bigInteger('compartment_3cp_xl')->default(0);
            $table->bigInteger('compartment_4cp')->default(0);
            $table->bigInteger('compartment_5cp')->default(0);
            $table->bigInteger('compartment_6cp')->default(0);
            $table->bigInteger('compartment_8cp')->default(0);
            $table->bigInteger('compartment_750_bow')->default(0);
            $table->bigInteger('al_container_with_lid_250')->default(0);
            $table->bigInteger('al_container_with_lid_450')->default(0);
            $table->bigInteger('al_container_with_lid_450_premium')->default(0);
            $table->bigInteger('al_container_with_lid_600')->default(0);
            $table->bigInteger('al_container_with_lid_750')->default(0);
            $table->bigInteger('al_container_with_lid_750_premium')->default(0);
            $table->bigInteger('p_box_idly')->default(0);
            $table->bigInteger('p_box_idly_vada')->default(0);
            $table->bigInteger('p_box_dosa')->default(0);
            $table->bigInteger('p_box_sandwich')->default(0);
            $table->bigInteger('p_bag_small')->default(0);
            $table->bigInteger('p_bag_medium')->default(0);
            $table->bigInteger('p_bag_large')->default(0);
            $table->bigInteger('p_bag_x_large')->default(0);
            $table->bigInteger('p_bag_xx_large')->default(0);
            $table->bigInteger('garbage_bag_small')->default(0);
            $table->bigInteger('garbage_bag_medium')->default(0);
            $table->bigInteger('garbage_bag_large')->default(0);
            $table->bigInteger('garbage_bag_x_large')->default(0);
            $table->bigInteger('tissue_22_22')->default(0);
            $table->bigInteger('tissue_27_30')->default(0);
            $table->bigInteger('tissue_30_30')->default(0);
            $table->bigInteger('aluminium_1kg_gross')->default(0);
            $table->bigInteger('aluminium_1kg_net')->default(0);
            $table->bigInteger('al_pouch_4_6')->default(0);
            $table->bigInteger('al_pouch_5_7')->default(0);
            $table->bigInteger('al_pouch_6_8')->default(0);
            $table->bigInteger('al_pouch_6_9')->default(0);
            $table->bigInteger('al_pouch_7_9')->default(0);
            $table->bigInteger('al_pouch_7_10')->default(0);
            $table->bigInteger('al_pouch_8_10')->default(0);
            $table->bigInteger('al_pouch_9_12')->default(0);
            $table->bigInteger('al_pouch_10_12')->default(0);
            $table->bigInteger('al_pouch_10_14')->default(0);
            $table->bigInteger('al_pouch_4_6_full')->default(0);
            $table->bigInteger('al_pouch_5_7_full')->default(0);
            $table->bigInteger('al_pouch_6_8_full')->default(0);
            $table->bigInteger('al_pouch_6_9_full')->default(0);
            $table->bigInteger('al_pouch_7_9_full')->default(0);
            $table->bigInteger('al_pouch_7_10_full')->default(0);
            $table->bigInteger('al_pouch_8_10_full')->default(0);
            $table->bigInteger('al_pouch_9_12_full')->default(0);
            $table->bigInteger('al_pouch_10_12_full')->default(0);
            $table->bigInteger('al_pouch_10_14_full')->default(0);
            $table->bigInteger('billing_roll_2')->default(0);
            $table->bigInteger('billing_roll_3')->default(0);
            $table->bigInteger('bopp_tape_2')->default(0);
            $table->bigInteger('bopp_tape_3')->default(0);
            $table->bigInteger('rubber_band_1')->default(0);
            $table->bigInteger('rubber_band_2')->default(0);
            $table->bigInteger('cloth_bag_10_11')->default(0);
            $table->bigInteger('cloth_bag_11_12')->default(0);
            $table->bigInteger('cloth_bag_12_12')->default(0);
            $table->bigInteger('cloth_bag_11_14')->default(0);
            $table->bigInteger('cloth_bag_13_16')->default(0);
            $table->bigInteger('cloth_bag_15_18')->default(0);
            $table->bigInteger('cloth_bag_16_20')->default(0);
            $table->bigInteger('cloth_bag_18_20')->default(0);
            $table->bigInteger('cloth_bag_20_20')->default(0);
            $table->bigInteger('paper_straw_6mm')->default(0);
            $table->bigInteger('paper_straw_8mm')->default(0);
            $table->bigInteger('paper_straw_10mm')->default(0);
            $table->bigInteger('paper_straw_12mm')->default(0);
            $table->bigInteger('paper_straw_6mm_2')->default(0);
            $table->bigInteger('paper_straw_8mm_2')->default(0);
            $table->bigInteger('paper_straw_10mm_2')->default(0);
            $table->bigInteger('user_id')->nullable()->references('id')->on('users')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_forms');
    }
}
