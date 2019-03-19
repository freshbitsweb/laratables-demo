<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExtraData\User;
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
