<?php

namespace App\Imports;

use App\Models\CatalogoPeriodo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CatalogoPeriodoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CatalogoPeriodo([
            'saldo' => $row['saldo'],
            'idCatalogo' => $row['idCatalogo'],
            'idPC'  => $row['idPC'],
        ]);
    }
}
