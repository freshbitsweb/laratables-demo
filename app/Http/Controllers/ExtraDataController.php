<?php

namespace App\Http\Controllers;

use App\ExtraData\User;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;

class ExtraDataController extends Controller
{
    /**
     * Fetch Extra data column can set color of datatable.
     *
     * @return Json
     */
    public function extraData()
    {
        return Laratables::recordsOf(User::class);
    }
}
