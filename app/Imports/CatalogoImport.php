<?php

namespace App\Imports;

use App\Models\Catalogo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;



class CatalogoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Catalogo([
            //
            'codigo'=>$row['codigo'],
            'nombreCuenta'=>$row['nombreCuenta'],
            'idTipoCatalogo'=>$row['idTipoCatalogo'],
            'idEmpresa'=>$row['idEmpresa'],
            'idCunetaPuente'=>$row['idCunetaPuente'],
        ]);
    }
}
