<?php

namespace App\Http\Controllers;

use App\Models\CatalogoPeriodo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CatalogoPeriodoImport;

class CatalogoPeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogoPeriodos = CatalogoPeriodo::get();
        return view('catalogoPeriodos', compact('catalogoPeriodos'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new CatalogoPeriodoImport,request()->file('file'));
        return back();
    }
}
