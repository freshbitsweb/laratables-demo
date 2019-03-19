<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomColumn\User;
use Freshbitsweb\Laratables\Laratables;

class CustomColumnController extends Controller
{
    /**
     * Returns the action column html for datatables.
     *
     * @return Json
     */
    public function customColumn()
    {
        return Laratables::recordsOf(User::class);
    }
}
