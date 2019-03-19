<?php

namespace App\Http\Controllers;

class DataTableController extends Controller
{
    /**
     * Show the datatables examples.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datatables.index');
    }
}
