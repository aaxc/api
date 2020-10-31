<?php

namespace App\Http\Controllers;

use App\Models\CountriesList;

/**
 * Class CountryController
 *
 * @author  Dainis Abols <dainis@dainisabols.lv>
 * @version 1.0
 *
 * @package App\Http\Controllers
 */
class CountryController extends Controller
{
    /**
     * Return region list
     *
     * @return \App\Models\Region[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $myCountries = new CountriesList();
        return $myCountries->all();
    }

    /**
     * Return single region info
     *
     * @param $id
     *
     * @return mixed
     */
    public function single($code)
    {
        $myCountries = new CountriesList();
        return $myCountries->get($code);
    }
}
