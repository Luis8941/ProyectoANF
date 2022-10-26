<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    use HasFactory;
    protected $table= 'Catalogo';
    protected $primaryKey = 'idCatalogo';
    protected $fillable = ['nombreCuenta'];

    public function periodoscontables()
    {
        return $this->belongsToMany(PeriodoContable::class,'CatalogoPeriodo','idCatalogo','idPC');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function cuentaPuente()
    {
        return $this->belongsTo(CuentaPuente::class);
    }

    public function tipoCatalogo()
    {
        return $this->belongsTo(TipoCatalogo::class);
    }
}
