<?php

namespace App\Http\Controllers;

use App\Models\CatalogoPeriodo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CatalogoPeriodoImport;
use DB;

class CatalogoPeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogoPeriodos = DB::table('CatalogoPeriodo')
            ->join('Catalogo', 'CatalogoPeriodo.idCatalogo', '=', 'Catalogo.id')
            ->select('CatalogoPeriodo.*', 'Catalogo.nombreCuenta')
            ->get();
        return view('catalogoPeriodo.index', compact('catalogoPeriodos'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        Excel::import(new CatalogoPeriodoImport,$request->file('balance'));
        return back();
    }
}
