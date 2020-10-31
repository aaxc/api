<?php

namespace App\Http\Controllers;

use App\Models\County;

/**
 * Class CountyController
 *
 * @author  Dainis Abols <dainis@dainisabols.lv>
 * @version 1.0
 *
 * @package App\Http\Controllers
 */
class CountyController extends Controller
{
    /**
     * Return county list
     *
     * @return \App\Models\City[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return County::all();
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
        $myCounty = County::findOrFail($id);

        return $myCounty->withRelations();
    }
}
