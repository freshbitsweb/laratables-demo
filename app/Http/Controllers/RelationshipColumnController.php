<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RelationshipColumn\Product;
use Freshbitsweb\Laratables\Laratables;

class RelationshipColumnController extends Controller
{
    /**
     * Fetch product and category in the datatables.
     *
     * @return Json
     */
    public function relationshipColumn()
    {
        return Laratables::recordsOf(Product::class);
    }
}
