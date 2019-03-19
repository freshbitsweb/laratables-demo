<?php

namespace App\Http\Controllers;

use App\Searching\User;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;

class SearchingController extends Controller
{
    /**
     * Search name in the datatables.
     *
     * @return Json
     */
    public function searching()
    {
        return Laratables::recordsOf(User::class);
    }
}
