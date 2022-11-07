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
        $catalogoPeriodos = CatalogoPeriodo::all();
        return view('catalogoPeriodo.index', compact('catalogoPeriodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogoPeriodo.create');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        Excel::import(new CatalogoPeriodoImport,$request->file('file'));
        return back();
    }
}
