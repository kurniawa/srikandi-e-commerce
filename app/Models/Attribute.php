<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attribute extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'data_type',     // select, number, boolean
        'is_filterable', // true/false
    ];

    protected $casts = [
        'is_filterable' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function values(): HasMany
    {
        return $this->hasMany(AttributeValue::class);
    }
}
