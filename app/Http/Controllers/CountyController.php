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
     * @OA\Get(
     *   path="/v1/counties",
     *   operationId="getCountiesList",
     *   tags={"County"},
     *   summary="Get list of counties",
     *   description="Returns list of counties",
     *   @OA\Response(
     *     response=200,
     *     description="Successful operation",
     *     @OA\MediaType(
     *       mediaType="application/json",
     *     ),
     *   ),
     * )
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
     * @OA\Get(
     *   path="/v1/counties/{id}",
     *   operationId="getCountyById",
     *   tags={"County"},
     *   summary="Get single county",
     *   description="Returns single county",
     *
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *       type="integer"
     *     )
     *   ),
     *
     *   @OA\Response(
     *     response=200,
     *     description="Successful operation",
     *     @OA\MediaType(
     *       mediaType="application/json",
     *     ),
     *   ),
     * )
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
