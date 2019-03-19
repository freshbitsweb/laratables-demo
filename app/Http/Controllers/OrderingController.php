<?php

namespace App\Http\Controllers;

use App\Ordering\User;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;

class OrderingController extends Controller
{
    /**
     * Fetch user data they column can orderable.
     *
     * @return Json
     */
    public function ordering()
    {
        return Laratables::recordsOf(User::class);
    }
}
