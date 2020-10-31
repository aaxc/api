<?php

namespace App\Http\Controllers;

use App\Models\City;

/**
 * Class CityController
 *
 * @author  Dainis Abols <dainis@dainisabols.lv>
 * @version 1.0
 *
 * @package App\Http\Controllers
 */
class CityController extends Controller
{
    /**
     * Return city list
     *
     * @return \App\Models\City[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return City::all();
    }

    /**
     * Return single city info
     *
     * @param $id
     *
     * @return mixed
     */
    public function single($id)
    {
        $myCity = City::findOrFail($id);

        return $myCity->withRelations();
    }
}
