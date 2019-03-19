<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ControllingQuery\User;
use Freshbitsweb\Laratables\Laratables;

class ControllingQueryController extends Controller
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
