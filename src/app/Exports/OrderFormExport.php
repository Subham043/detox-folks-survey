<?php

namespace App\Exports;

use App\Models\OrderForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\Auth;

class OrderFormExport implements FromCollection,WithHeadings,WithMapping
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'id',
            'name',
            'phone',
            'designation',
            'address',
            'pp container 50ml quantity',
            'pp container 50ml color',
            'pp container 100ml quantity',
            'pp container 100ml color',
            'pp container 150ml quantity',
            'pp container 150ml color',
            'pp container 200g quantity',
            'pp container 200g color',
            'pp container 250ml quantity',
            'pp container 250ml color',
            'pp container 300ml quantity',
            'pp container 300ml color',
            'pp container 500g quantity',
            'pp container 500g color',
            'pp container 500ml quantity',
            'pp container 500ml color',
            'pp container 750ml tall quantity',
            'pp container 750ml tall color',
            'pp container 750ml flat quantity',
            'pp container 750ml flat color',
            'pp container 1000ml flat quantity',
            'pp container 1000ml flat color',
            'pp container 500 rec quantity',
            'pp container 500 rec color',
            'pp container 650 rec quantity',
            'pp container 650 rec color',
            'pp container 750 rec quantity',
            'pp container 750 rec color',
            'pp container 1000 rec quantity',
            'pp container 1000 rec color',
            'pp container 650 bowl quantity',
            'pp container 650 bowl color',


            'aluminiun container with lid quantity 250ml regular',
            'aluminiun container with lid quantity 450ml regular',
            'aluminiun container with lid quantity 660ml regular',
            'aluminiun container with lid quantity 750ml regular',
            'aluminiun container with lid quantity 450ml premium',
            'aluminiun container with lid quantity 750ml premium',

            'aluminium foil quantity 1kg gross',
            'aluminium foil quantity 1kg net',

            'compartment tray 2cp quantity',
            'compartment tray 2cp color',
            'compartment tray 3cp quantity',
            'compartment tray 3cp color',
            'compartment tray 3cp xl quantity',
            'compartment tray 3cp xl color',
            'compartment tray 4cp quantity',
            'compartment tray 4cp color',
            'compartment tray 5cp quantity',
            'compartment tray 5cp color',
            'compartment tray 6cp quantity',
            'compartment tray 6cp color',
            'compartment tray 8cp quantity',
            'compartment tray 8cp color',
            'compartment tray 750 bow quantity',
            'compartment tray 750 bow color',

            'paper box quantity idly box 2pc',
            'paper box quantity idly vada box',
            'paper box quantity dosa box',
            'paper box quantity sandwich box',

            'v bottom paper bag quantity 1kg',
            'v bottom paper bag quantity 2kg',
            'v bottom paper bag quantity 3kg',
            'v bottom paper bag quantity 5kg',
            'v bottom paper bag quantity 7kg',

            'cloth bag quantity 10*11',
            'cloth bag quantity 11*12',
            'cloth bag quantity 12*12',
            'cloth bag quantity 11*14',
            'cloth bag quantity 13*16',
            'cloth bag quantity 15*18',
            'cloth bag quantity 16*20',
            'cloth bag quantity 18*20',
            'cloth bag quantity 20*20',

            'gloves quantity regular',

            'head cap quantity 16*10',
            'head cap quantity 18*10',
            'head cap quantity 21*10',

            'cutlery quantity 110mm spoon',
            'cutlery quantity 140mm spoon',
            'cutlery quantity 160mm spoon',
            'cutlery quantity 140mm fork',
            'cutlery quantity 160mm fork',

            '6 layer aluminium coated pouch quantity cut size 4x6',
            '6 layer aluminium coated pouch quantity cut size 5x7',
            '6 layer aluminium coated pouch quantity cut size 6x8',
            '6 layer aluminium coated pouch quantity cut size 6x9',
            '6 layer aluminium coated pouch quantity cut size 7x9',
            '6 layer aluminium coated pouch quantity cut size 7x10',
            '6 layer aluminium coated pouch quantity cut size 8x10',
            '6 layer aluminium coated pouch quantity cut size 9x12',
            '6 layer aluminium coated pouch quantity cut size 10x12',
            '6 layer aluminium coated pouch quantity cut size 10x14',
            '6 layer aluminium coated pouch quantity full size 4x6',
            '6 layer aluminium coated pouch quantity full size 5x7',
            '6 layer aluminium coated pouch quantity full size 6x8',
            '6 layer aluminium coated pouch quantity full size 6x9',
            '6 layer aluminium coated pouch quantity full size 7x9',
            '6 layer aluminium coated pouch quantity full size 7x10',
            '6 layer aluminium coated pouch quantity full size 8x10',
            '6 layer aluminium coated pouch quantity full size 9x12',
            '6 layer aluminium coated pouch quantity full size 10x12',
            '6 layer aluminium coated pouch quantity full size 10x14',

            'tissues quantity 22*22',
            'tissues quantity 27*30',
            'tissues quantity 30*30',

            'garbage bag quantity small',
            'garbage bag quantity medium',
            'garbage bag quantity large',
            'garbage bag quantity x_large',

            'bopp tape quantity 3"',
            'bopp tape color 3"',
            'bopp tape quantity 2"',
            'bopp tape color 2"',
            'bopp tape quantity 1"',
            'bopp tape color 1"',

            'billing roll quantity 2"',
            'billing roll quantity 3"',

            'rubber band quantity premium',
            'rubber band quantity regular',

            'paper straw quantity 6*200mm',
            'paper straw quantity 8*200mm',
            'paper straw quantity 10*200mm',
            'paper straw quantity 12*200mm',

            'mask quantity 3 play',
            'mask quantity meltblown',

            'carry bag quantity small',
            'carry bag quantity medium',
            'carry bag quantity large',
            'carry bag quantity extra large',

            'parcel paper sheet quantity 10',
            'parcel paper sheet quantity 12',
            'parcel paper sheet quantity 14',

            'total amount',
            'staff',
            'created_at',
        ];
    }

    public function map($data): array
    {
         return[
            $data->id,
            $data->name,
            $data->phone,
            $data->designation,
            $data->address,

            $data->pp_50,
            $data->pp_50_color,
            $data->pp_100,
            $data->pp_100_color,
            $data->pp_150,
            $data->pp_150_color,
            $data->pp_200_g,
            $data->pp_200_g_color,
            $data->pp_250,
            $data->pp_250_color,
            $data->pp_300,
            $data->pp_300_color,
            $data->pp_500_g,
            $data->pp_500_g_color,
            $data->pp_500,
            $data->pp_500_color,
            $data->pp_750,
            $data->pp_750_color,
            $data->pp_750_flat,
            $data->pp_750_flat_color,
            $data->pp_1000,
            $data->pp_1000_color,
            $data->pp_500_rec,
            $data->pp_500_rec_color,
            $data->pp_650_rec,
            $data->pp_650_rec_color,
            $data->pp_750_rec,
            $data->pp_750_rec_color,
            $data->pp_1000_rec,
            $data->pp_1000_rec_color,
            $data->pp_650_bowl,
            $data->pp_650_bowl_color,

            $data->al_container_with_lid_250,
            $data->al_container_with_lid_450,
            $data->al_container_with_lid_600,
            $data->al_container_with_lid_750,
            $data->al_container_with_lid_450_premium,
            $data->al_container_with_lid_750_premium,

            $data->aluminium_1kg_gross,
            $data->aluminium_1kg_gross,

            $data->compartment_2cp,
            $data->compartment_2cp_color,
            $data->compartment_3cp,
            $data->compartment_3cp_color,
            $data->compartment_3cp_xl,
            $data->compartment_3cp_xl_color,
            $data->compartment_4cp,
            $data->compartment_4cp_color,
            $data->compartment_5cp,
            $data->compartment_5cp_color,
            $data->compartment_6cp,
            $data->compartment_6cp_color,
            $data->compartment_8cp,
            $data->compartment_8cp_color,
            $data->compartment_750_bow,
            $data->compartment_750_bow_color,

            $data->p_box_idly,
            $data->p_box_idly_vada,
            $data->p_box_dosa,
            $data->p_box_sandwich,

            $data->p_bag_small,
            $data->p_bag_medium,
            $data->p_bag_large,
            $data->p_bag_x_large,
            $data->p_bag_xx_large,

            $data->cloth_bag_10_11,
            $data->cloth_bag_11_12,
            $data->cloth_bag_12_12,
            $data->cloth_bag_11_14,
            $data->cloth_bag_13_16,
            $data->cloth_bag_15_18,
            $data->cloth_bag_16_20,
            $data->cloth_bag_18_20,
            $data->cloth_bag_20_20,

            $data->gloves_regular,

            $data->head_cap_16_10,
            $data->head_cap_18_10,
            $data->head_cap_21_10,

            $data->cuttlery_110_spoon,
            $data->cuttlery_140_spoon,
            $data->cuttlery_160_spoon,
            $data->cuttlery_140_fork,
            $data->cuttlery_160_fork,

            $data->al_pouch_4_6,
            $data->al_pouch_5_7,
            $data->al_pouch_6_8,
            $data->al_pouch_6_9,
            $data->al_pouch_7_9,
            $data->al_pouch_7_10,
            $data->al_pouch_8_10,
            $data->al_pouch_9_12,
            $data->al_pouch_10_12,
            $data->al_pouch_10_14,
            $data->al_pouch_4_6_full,
            $data->al_pouch_5_7_full,
            $data->al_pouch_6_8_full,
            $data->al_pouch_6_9_full,
            $data->al_pouch_7_9_full,
            $data->al_pouch_7_10_full,
            $data->al_pouch_8_10_full,
            $data->al_pouch_9_12_full,
            $data->al_pouch_10_12_full,
            $data->al_pouch_10_14_full,

            $data->tissue_22_22,
            $data->tissue_27_30,
            $data->tissue_30_30,

            $data->garbage_bag_small,
            $data->garbage_bag_medium,
            $data->garbage_bag_large,
            $data->garbage_bag_x_large,

            $data->bopp_tape_3,
            $data->bopp_tape_3_color,
            $data->bopp_tape_2,
            $data->bopp_tape_2_color,
            $data->bopp_tape_1,
            $data->bopp_tape_1_color,

            $data->billing_roll_2,
            $data->billing_roll_3,

            $data->rubber_band_1,
            $data->rubber_band_2,

            $data->paper_straw_6mm,
            $data->paper_straw_8mm,
            $data->paper_straw_10mm,
            $data->paper_straw_12mm,

            $data->mask_3_play,
            $data->mask_meltblown,

            $data->carry_bag_bag_small,
            $data->carry_bag_bag_medium,
            $data->carry_bag_bag_large,
            $data->carry_bag_bag_x_large,

            $data->parcel_paper_10,
            $data->parcel_paper_12,
            $data->parcel_paper_14,

            $data->amount,

            $data->staff->name,
            $data->created_at,
         ];
    }

    public function collection()
    {
        $data = OrderForm::with('Staff');
        if(Auth::check() && Auth::user()->userType==2){
            $data->where('user_id', Auth::id());
        }
        $data = $data->get();
        return $data;
    }
}
