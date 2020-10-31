<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties')->delete();

        DB::table('counties')->insert(
            [
                0   =>
                    [
                        'id'           => 1,
                        'name'         => 'Rīga',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                1   =>
                    [
                        'id'           => 2,
                        'name'         => 'Daugavpils Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                2   =>
                    [
                        'id'           => 3,
                        'name'         => 'Liepāja',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                3   =>
                    [
                        'id'           => 4,
                        'name'         => 'Jelgavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                4   =>
                    [
                        'id'           => 5,
                        'name'         => 'Ventspils',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                5   =>
                    [
                        'id'           => 6,
                        'name'         => 'Rēzeknes Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                6   =>
                    [
                        'id'           => 7,
                        'name'         => 'Inčukalna Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                7   =>
                    [
                        'id'           => 8,
                        'name'         => 'Ķekavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                8   =>
                    [
                        'id'           => 9,
                        'name'         => 'Valkas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                9   =>
                    [
                        'id'           => 10,
                        'name'         => 'Sējas Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                10  =>
                    [
                        'id'           => 11,
                        'name'         => 'Mārupes Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                11  =>
                    [
                        'id'           => 12,
                        'name'         => 'Amatas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                12  =>
                    [
                        'id'           => 13,
                        'name'         => 'Iecavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                13  =>
                    [
                        'id'           => 14,
                        'name'         => 'Salacgrīvas Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                14  =>
                    [
                        'id'           => 15,
                        'name'         => 'Ķeguma Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                15  =>
                    [
                        'id'           => 16,
                        'name'         => 'Siguldas Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                16  =>
                    [
                        'id'           => 17,
                        'name'         => 'Jaunpils Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                17  =>
                    [
                        'id'           => 18,
                        'name'         => 'Alsungas Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                18  =>
                    [
                        'id'           => 19,
                        'name'         => 'Tērvetes Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                19  =>
                    [
                        'id'           => 20,
                        'name'         => 'Talsu Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                20  =>
                    [
                        'id'           => 21,
                        'name'         => 'Cesvaines Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                21  =>
                    [
                        'id'           => 22,
                        'name'         => 'Cēsu Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                22  =>
                    [
                        'id'           => 23,
                        'name'         => 'Kocēnu Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                23  =>
                    [
                        'id'           => 24,
                        'name'         => 'Kokneses Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                24  =>
                    [
                        'id'           => 25,
                        'name'         => 'Dundagas Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                25  =>
                    [
                        'id'           => 26,
                        'name'         => 'Priekuļu Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                26  =>
                    [
                        'id'           => 27,
                        'name'         => 'Rojas Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                27  =>
                    [
                        'id'           => 28,
                        'name'         => 'Raunas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                28  =>
                    [
                        'id'           => 29,
                        'name'         => 'Alojas Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                29  =>
                    [
                        'id'           => 30,
                        'name'         => 'Rucavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                30  =>
                    [
                        'id'           => 31,
                        'name'         => 'Lielvārdes Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                31  =>
                    [
                        'id'           => 32,
                        'name'         => 'Beverīnas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                32  =>
                    [
                        'id'           => 33,
                        'name'         => 'Vārkavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                33  =>
                    [
                        'id'           => 34,
                        'name'         => 'Bauskas Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                34  =>
                    [
                        'id'           => 35,
                        'name'         => 'Ērgļu Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                35  =>
                    [
                        'id'           => 36,
                        'name'         => 'Varakļānu Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                36  =>
                    [
                        'id'           => 37,
                        'name'         => 'Stopiņu Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                37  =>
                    [
                        'id'           => 38,
                        'name'         => 'Mazsalacas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                38  =>
                    [
                        'id'           => 39,
                        'name'         => 'Lubānas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                39  =>
                    [
                        'id'           => 40,
                        'name'         => 'Ikšķiles Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                40  =>
                    [
                        'id'           => 41,
                        'name'         => 'Krimuldas Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                41  =>
                    [
                        'id'           => 42,
                        'name'         => 'Jaunjelgavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                42  =>
                    [
                        'id'           => 43,
                        'name'         => 'Ludzas Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                43  =>
                    [
                        'id'           => 44,
                        'name'         => 'Viļānu Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                44  =>
                    [
                        'id'           => 45,
                        'name'         => 'Grobiņas Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                45  =>
                    [
                        'id'           => 46,
                        'name'         => 'Rūjienas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                46  =>
                    [
                        'id'           => 47,
                        'name'         => 'Alūksnes Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                47  =>
                    [
                        'id'           => 48,
                        'name'         => 'Aglonas Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                48  =>
                    [
                        'id'           => 49,
                        'name'         => 'Burtnieku Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                49  =>
                    [
                        'id'           => 50,
                        'name'         => 'Pāvilostas Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                50  =>
                    [
                        'id'           => 51,
                        'name'         => 'Kārsavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                51  =>
                    [
                        'id'           => 52,
                        'name'         => 'Jūrmala',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                52  =>
                    [
                        'id'           => 53,
                        'name'         => 'Dagdas Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                53  =>
                    [
                        'id'           => 54,
                        'name'         => 'Pārgaujas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                54  =>
                    [
                        'id'           => 55,
                        'name'         => 'Engures Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                55  =>
                    [
                        'id'           => 56,
                        'name'         => 'Mērsraga Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                56  =>
                    [
                        'id'           => 57,
                        'name'         => 'Līvānu Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                57  =>
                    [
                        'id'           => 58,
                        'name'         => 'Vecpiebalgas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                58  =>
                    [
                        'id'           => 59,
                        'name'         => 'Jaunpiebalgas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                59  =>
                    [
                        'id'           => 60,
                        'name'         => 'Saldus Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                60  =>
                    [
                        'id'           => 61,
                        'name'         => 'Limbažu Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                61  =>
                    [
                        'id'           => 62,
                        'name'         => 'Baltinavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                62  =>
                    [
                        'id'           => 63,
                        'name'         => 'Preiļu Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                63  =>
                    [
                        'id'           => 64,
                        'name'         => 'Aizkraukles Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                64  =>
                    [
                        'id'           => 65,
                        'name'         => 'Gulbenes Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                65  =>
                    [
                        'id'           => 66,
                        'name'         => 'Ciblas Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                66  =>
                    [
                        'id'           => 67,
                        'name'         => 'Rugāju Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                67  =>
                    [
                        'id'           => 68,
                        'name'         => 'Smiltenes Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                68  =>
                    [
                        'id'           => 69,
                        'name'         => 'Riebiņu Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                69  =>
                    [
                        'id'           => 70,
                        'name'         => 'Aizputes Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                70  =>
                    [
                        'id'           => 71,
                        'name'         => 'Tukuma Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                71  =>
                    [
                        'id'           => 72,
                        'name'         => 'Baldones Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                72  =>
                    [
                        'id'           => 73,
                        'name'         => 'Viesītes Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                73  =>
                    [
                        'id'           => 74,
                        'name'         => 'Garkalnes Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                74  =>
                    [
                        'id'           => 75,
                        'name'         => 'Durbes Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                75  =>
                    [
                        'id'           => 76,
                        'name'         => 'Balvu Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                76  =>
                    [
                        'id'           => 77,
                        'name'         => 'Madonas Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                77  =>
                    [
                        'id'           => 78,
                        'name'         => 'Zilupes Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                78  =>
                    [
                        'id'           => 79,
                        'name'         => 'Kuldīgas Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                79  =>
                    [
                        'id'           => 80,
                        'name'         => 'Strenču Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                80  =>
                    [
                        'id'           => 81,
                        'name'         => 'Salas Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                81  =>
                    [
                        'id'           => 82,
                        'name'         => 'Olaines Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                82  =>
                    [
                        'id'           => 83,
                        'name'         => 'Aknīstes Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                83  =>
                    [
                        'id'           => 84,
                        'name'         => 'Nīcas Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                84  =>
                    [
                        'id'           => 85,
                        'name'         => 'Jēkabpils Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                85  =>
                    [
                        'id'           => 86,
                        'name'         => 'Auces Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                86  =>
                    [
                        'id'           => 87,
                        'name'         => 'Viļakas Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                87  =>
                    [
                        'id'           => 88,
                        'name'         => 'Vaiņodes Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                88  =>
                    [
                        'id'           => 89,
                        'name'         => 'Mālpils Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                89  =>
                    [
                        'id'           => 90,
                        'name'         => 'Ogres Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                90  =>
                    [
                        'id'           => 91,
                        'name'         => 'Ilūkstes Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                91  =>
                    [
                        'id'           => 92,
                        'name'         => 'Kandavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                92  =>
                    [
                        'id'           => 93,
                        'name'         => 'Ozolnieku Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                93  =>
                    [
                        'id'           => 94,
                        'name'         => 'Carnikavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                94  =>
                    [
                        'id'           => 95,
                        'name'         => 'Krāslavas Novads',
                        'area_size'    => 0,
                        'region_id'    => 4,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                95  =>
                    [
                        'id'           => 96,
                        'name'         => 'Valmiera',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                96  =>
                    [
                        'id'           => 97,
                        'name'         => 'Ādažu Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                97  =>
                    [
                        'id'           => 98,
                        'name'         => 'Naukšēnu Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                98  =>
                    [
                        'id'           => 99,
                        'name'         => 'Rundāles Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                99  =>
                    [
                        'id'           => 100,
                        'name'         => 'Dobeles Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                100 =>
                    [
                        'id'           => 101,
                        'name'         => 'Apes Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                101 =>
                    [
                        'id'           => 102,
                        'name'         => 'Salaspils Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                102 =>
                    [
                        'id'           => 103,
                        'name'         => 'Ropažu Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                103 =>
                    [
                        'id'           => 104,
                        'name'         => 'Brocēnu Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                104 =>
                    [
                        'id'           => 105,
                        'name'         => 'Skrīveru Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                105 =>
                    [
                        'id'           => 106,
                        'name'         => 'Skrundas Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                106 =>
                    [
                        'id'           => 107,
                        'name'         => 'Priekules Novads',
                        'area_size'    => 0,
                        'region_id'    => 3,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                107 =>
                    [
                        'id'           => 108,
                        'name'         => 'Saulkrastu Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                108 =>
                    [
                        'id'           => 109,
                        'name'         => 'Līgatnes Novads',
                        'area_size'    => 0,
                        'region_id'    => 2,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                109 =>
                    [
                        'id'           => 110,
                        'name'         => 'Pļaviņu Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                110 =>
                    [
                        'id'           => 111,
                        'name'         => 'Neretas Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                111 =>
                    [
                        'id'           => 112,
                        'name'         => 'Vecumnieku Novads',
                        'area_size'    => 0,
                        'region_id'    => 1,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
                112 =>
                    [
                        'id'           => 113,
                        'name'         => 'Babītes Novads',
                        'area_size'    => 0,
                        'region_id'    => 5,
                        'country_code' => 'LVA',
                        'created_at'   => Carbon::now(),
                        'updated_at'   => Carbon::now(),
                    ],
            ]
        );
    }
}
