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
     * @OA\Get(
     *   path="/v1/regions",
     *   operationId="getRegionsList",
     *   tags={"Region"},
     *   summary="Get list of region",
     *   description="Returns list of regions",
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
        return Region::all();
    }

    /**
     * Return single region info
     *
     * @OA\Get(
     *   path="/v1/regions/{id}",
     *   operationId="getRegionById",
     *   tags={"Region"},
     *   summary="Get singel region",
     *   description="Returns single regions",
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
        $myRegion = Region::findOrFail($id);

        return $myRegion->withRelations();
    }
}
