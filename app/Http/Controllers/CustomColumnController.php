<?php

namespace App\Http\Controllers;

use App\CustomColumn\User;
use Illuminate\Http\Request;
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
