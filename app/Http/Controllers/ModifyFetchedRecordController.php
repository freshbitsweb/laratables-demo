<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Models\ModifyFetchedRecord\User;

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
