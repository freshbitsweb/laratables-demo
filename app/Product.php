<?php

namespace App;

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

    /**
     * Eager load product category of the product for displaying in the datatables.
     *
     * @return callable
     */
    public static function laratablesProductRelationQuery()
    {
        return function ($query) {
            $query->with('productCategory');
        };
    }
}
