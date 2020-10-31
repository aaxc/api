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
     * @OA\Get(
     *   path="/v1/cities",
     *   operationId="getCitiesList",
     *   tags={"City"},
     *   summary="Get list of cities",
     *   description="Returns list of cities",
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
        return City::all();
    }

    /**
     * Return single city info
     *
     * @OA\Get(
     *   path="/v1/cities/{id}",
     *   operationId="getCityById",
     *   tags={"City"},
     *   summary="Get single city",
     *   description="Returns single city",
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
        $myCity = City::findOrFail($id);

        return $myCity->withRelations();
    }
}
