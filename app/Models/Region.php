<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 *
 * @author  Dainis Abols <dainis@dainisabols.lv>
 * @version 1.0
 *
 * @package App\Models
 */
class Region extends Model
{
    use HasFactory;

    // Disable fields
    protected $hidden = ['created_at', 'updated_at'];

    // Change field types
    protected $casts = [
        'area_size' => 'float',
    ];

    /**
     * County relations
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function counties()
    {
        return $this->hasMany(County::class);
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
     * @return \App\Models\Region
     */
    public function withRelations()
    {
        // Add relations
        $this->load('counties');

        return $this;
    }
}
