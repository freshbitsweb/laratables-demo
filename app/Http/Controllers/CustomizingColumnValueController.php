<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Models\CustomizingColumnValue\Product;

class CustomizingColumnValueController extends Controller
{
    /**
     * Returns the action column html for datatables.
     *
     * @return Json
     */
    public function customizingColumnValue()
    {
        return Laratables::recordsOf(Product::class);
    }
}
