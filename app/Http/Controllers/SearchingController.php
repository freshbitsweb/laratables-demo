<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Searching\User;
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
