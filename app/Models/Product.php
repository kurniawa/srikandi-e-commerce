<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'weight',
        'buy_price_per_gram',
        'sell_fee_per_gram',
        'total_price',
        'stock',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function attributeValues(): BelongsToMany
    {
        return $this->belongsToMany(
            AttributeValue::class,
            'attribute_value_product'
        )->withTimestamps();
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Methods
    |--------------------------------------------------------------------------
    */

    // Ambil value berdasarkan slug attribute
    public function attributeValue(string $attributeSlug)
    {
        return $this->attributeValues
            ->firstWhere('attribute.slug', $attributeSlug);
    }

    // Contoh accessor untuk ambil metal type
    public function getMetalTypeAttribute()
    {
        return $this->getAttributeValue('metal-type')?->value;
    }
}
