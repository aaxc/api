<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 *
 * @author  Dainis Abols <dainis@dainisabols.lv>
 * @version 1.0
 *
 * @package App\Models
 */
class City extends Model
{
    use HasFactory;

    // Disable fields
    protected $hidden = ['created_at', 'updated_at'];

    // Change field types
    protected $casts = [
        'capital'    => 'boolean',
        'population' => 'integer',
        'area_size'  => 'float',
        'county_id'  => 'integer',
        'region_id'  => 'integer',
    ];

    /**
     * County relations
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function county()
    {
        return $this->belongsTo(County::class);
    }

    /**
     * Region relations
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    /**
     * Load relations
     *
     * @return \App\Models\City
     */
    public function withRelations()
    {
        // Add relations
        $this->load('region');
        $this->load('county');

        // Remove ID fields
        unset($this->region_id);
        unset($this->county_id);

        return $this;
    }
}
