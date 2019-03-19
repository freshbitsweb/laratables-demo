<?php

namespace App\CustomizingColumnValue;

use Illuminate\Support\Str;
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
     * Returns truncated name for the datatables.
     *
     * @return string
     */
    public function laratablesDescription()
    {
        return Str::limit($this->description, 100);
    }
}
