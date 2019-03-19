<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Models\SpecifyingAdditionalSearchableColumn\User;

class SpecifyingAdditionalSearchableColumnController extends Controller
{
    /**
     * Fetch User record with additional searchable columns to the datatables.
     *
     * @return Json
     */
    public function specifyingAdditionalSearchableColumn()
    {
        return Laratables::recordsOf(User::class);
    }
}
