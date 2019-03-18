<?php

namespace App\RelationshipColumn;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_category_id', 'name', 'description',
    ];

    /**
     * Get the product category that owns the product.
     */
    public function productCategory()
    {
        return $this->belongsTo('App\ProductCategory');
    }
}
