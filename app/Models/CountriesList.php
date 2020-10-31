<?php

namespace App\Models;

use PragmaRX\Countries\Package\Countries;
use PragmaRX\Countries\Package\Support\Collection;

/**
 * Class City
 *
 * @author  Dainis Abols <dainis@dainisabols.lv>
 * @version 1.0
 *
 * @package App\Models
 */
class CountriesList
{
    /**
     * Return countries list
     *
     * @return array
     */
    public function all()
    {
        // Find all countries
        $myCountries  = new Countries();
        $allCountries = $myCountries->all();

        // Build a simpler return
        $list = [];
        foreach ($allCountries as $code => $country) {
            $list[] = $this->buildCountry($country);
        }

        return $list;
    }

    /**
     * Return single country
     *
     * @param $code
     *
     * @return array
     */
    public function get($code)
    {
        // Upparcase the value
        $code = strtoupper($code);

        // Find single entry
        $myCountries = new Countries();
        $country     = $myCountries->where('iso_a3', $code);

        return $this->buildCountry($country->{$code}, true);
    }

    /**
     * Build a country model
     *
     * @param \PragmaRX\Countries\Package\Support\Collection $country
     * @param false                                          $single
     *
     * @return array
     */
    private function buildCountry(Collection $country, $single = false)
    {
        // If ISO code can not be located, fail
        if (!$country['iso_a3']) {
            return [];
        }

        // Add common data
        $data = [
            'code'       => $country['iso_a3'],
            'name'       => $country['name']['common'],
            'area_size'  => $country['geo']['area'] ?? 0,
            'population' => [
                'amount' => (int)$country['pop_est'],
                'year'   => (int)$country['pop_year'],
            ],
        ];

        // Add regions if single request
        if ($single) {
            $myRegions       = Region::where('country_code', $country['iso_a3'])->get();
            $data['regions'] = $myRegions;

            // Add additional info
            $data['borders']       = $country['geo']['borders'];
            $data['continent']     = $country['geo']['continent'];
            $data['calling_codes'] = $country['calling_codes'];
            $data['languages']     = $country['languages'];
            $data['currencies']    = $country['currencies'];

            // Add flags and rewrite svg url
            $data['flag']             = $country['flag'];
            $data['flag']['svg'] = str_replace(base_path().'/vendor/pragmarx/countries/src/data/', env('APP_URL').'/data/countries/', $data['flag']['svg_path']);
            unset($data['flag']['svg_path']);
        }

        return $data;
    }
}
