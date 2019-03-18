<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Freshbitsweb\Laratables\Laratables;

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

    /**
     * return data of the simple datatables.
     *
     * @return Json
     */
    public function getSimpleDatatablesData()
    {
        return Laratables::recordsOf(User::class);
    }

    /**
     * return data of the relation columns datatables.
     *
     * @return Json
     */
    public function getRelationshipColumnDatatablesData()
    {
        return Laratables::recordsOf(Product::class);
    }

    /**
     * return data of the Extra data datatables attribute data.
     *
     * @return Json
     */
    public function getExtraDataDatatablesAttributesData()
    {
        return Laratables::recordsOf(User::class);
    }
}
