<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class RegionSeeders
 *
 * @author  Dainis Abols <dainis@dainisabols.lv>
 * @since   30.10.2020
 *
 * @package Database\Seeders
 */
class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->delete();

        DB::table('regions')->insert(
            [
                [
                    'id'           => 1,
                    'name'         => 'Zemgale',
                    'country_code' => 'LVA',
                    'area_size'    => 10742,
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
                ],
                [
                    'id'           => 2,
                    'name'         => 'Vidzeme',
                    'country_code' => 'LVA',
                    'area_size'    => 25683,
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
                ],
                [
                    'id'           => 3,
                    'name'         => 'Kurzeme',
                    'country_code' => 'LVA',
                    'area_size'    => 13596,
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
                ],
                [
                    'id'           => 4,
                    'name'         => 'Latgale',
                    'country_code' => 'LVA',
                    'area_size'    => 14547,
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
                ],
                [
                    'id'           => 5,
                    'name'         => 'Rīga',
                    'country_code' => 'LVA',
                    'area_size'    => 0,
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
                ],
                [
                    'id'           => 6,
                    'name'         => 'unknown',
                    'country_code' => 'LVA',
                    'area_size'    => 0,
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
                ],
            ]
        );
    }
}
