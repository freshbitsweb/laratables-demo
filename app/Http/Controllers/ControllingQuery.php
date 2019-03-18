<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ControllingQuery\User;
use Freshbitsweb\Laratables\Laratables;

class ControllingQuery extends Controller
{
    /**
     * Fetch only active users in the datatables.
     *
     * @return Json
     */
    public function controllingTheQuery()
    {
        return Laratables::recordsOf(User::class);
    }
}
