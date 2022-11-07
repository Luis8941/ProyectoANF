<?php

namespace App\Exports;

use App\Models\Catalogo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CatalogosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Catalogo::select("codigo","idTipoCatalogo","idEmpresa","idCuentaPuente")->get();
    }
    public function headings(): array
    {
        return [ "Codigo", "idTipoCatalogo","idEmpresa","idCuentaPuente"];
    }
}
