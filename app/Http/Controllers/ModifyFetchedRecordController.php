<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModifyFetchedRecord\User;
use Freshbitsweb\Laratables\Laratables;

class ModifyFetchedRecordController extends Controller
{
    /**
     * Fetch record modify in the datatables.
     *
     * @return Json
     */
    public function modifyFetchedRecord()
    {
        return Laratables::recordsOf(User::class);
    }
}
