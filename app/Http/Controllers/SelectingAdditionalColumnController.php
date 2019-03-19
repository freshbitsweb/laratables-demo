<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SelectingAdditionalColumn\User;
use Freshbitsweb\Laratables\Laratables;

class SelectingAdditionalColumnController extends Controller
{
    /**
     * Fetch User record with additional columns to the datatables.
     *
     * @return Json
     */
    public function selectingAdditionalColumn()
    {
        return Laratables::recordsOf(User::class);
    }
}
