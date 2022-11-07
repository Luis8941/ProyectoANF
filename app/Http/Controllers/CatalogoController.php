<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;
use App\Exports\CatalogosExport;
use App\Imports\CatalogoImport;
use Maatwebsite\Excel\Facades\Excel;


class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('catalogo.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogo $catalogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogo $catalogo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogo $catalogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalogo $catalogo)
    {
        //
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new CatalogosExport, 'catolgos.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request)
    {
        /* $request->validate([
            'file' => 'required|max:10000|mimes:xlsx,xls',
        ]);

        $path = $request->file('catalogo')->getRealPath();

            Excel::import(new CatalogoImport, $path,\Maatwebsite\Excel\Excel::XLSX);
        Excel::import(new CatalogoImport,$request()->file('catalogo'));*/

        if($request->hasFile('catalogo')){
            $path = $request->file('catalogo')->getRealPath();
            $datos = Excel::load($path, function($reader){
            })->get();

            if(!empty($datos) && $datos->count()){
                $datos = $datos->toArray();
                for($i=0; $i< count($datos); $i++){
                    $datosImportar[] = $datos[$i];
                }
            }

            Catalogo::insert($datosImportar);
        }

        return back();
    }
}
