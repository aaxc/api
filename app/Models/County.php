<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class County
 *
 * @author  Dainis Abols <dainis@dainisabols.lv>
 * @version 1.0
 *
 * @package App\Models
 */
class County extends Model
{
    use HasFactory;

    // Disable fields
    protected $hidden = ['created_at', 'updated_at'];

    // Change field types
    protected $casts = [
        'area_size' => 'float',
        'region_id' => 'integer',
    ];

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
     * City relations
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    /**
     * Load relations
     *
     * @return \App\Models\County
     */
    public function withRelations()
    {
        // Add relations
        $this->load('region');
        $this->load('cities');

        // Remove ID fields
        unset($this->region_id);

        return $this;
    }
}
