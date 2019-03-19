<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Models\RelationshipColumn\Product;

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
