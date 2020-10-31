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
     * Return country list
     *
     * @OA\Get(
     *   path="/v1/countries",
     *   operationId="getCountriesList",
     *   tags={"Country"},
     *   summary="Get list of countries",
     *   description="Returns list of countries",
     *   @OA\Response(
     *     response=200,
     *     description="Successful operation",
     *     @OA\MediaType(
     *       mediaType="application/json",
     *     ),
     *   ),
     * )
     *
     * @return \App\Models\Region[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $myCountries = new CountriesList();
        return $myCountries->all();
    }

    /**
     * Return single country info
     *
     * @OA\Get(
     *   path="/v1/countries/{id}",
     *   operationId="getCountryById",
     *   tags={"Country"},
     *   summary="Get single country",
     *   description="Returns single country",
     *
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *       type="string"
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
     * @param string $code
     *
     * @return mixed
     */
    public function single($code)
    {
        $myCountries = new CountriesList();
        return $myCountries->get($code);
    }
}
