<?php

namespace App\Http\Controllers;

use App\Models\Region;

/**
 * Class RegionController
 *
 * @author  Dainis Abols <dainis@dainisabols.lv>
 * @version 1.0
 *
 * @package App\Http\Controllers
 */
class RegionController extends Controller
{
    /**
     * Return region list
     *
     * @return \App\Models\Region[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Region::all();
    }

    /**
     * Return single region info
     *
     * @param $id
     *
     * @return mixed
     */
    public function single($id)
    {
        $myRegion = Region::findOrFail($id);

        return $myRegion->withRelations();
    }
}
