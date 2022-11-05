<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratio extends Model
{
    use HasFactory;
    protected $table= 'Ratio';
    protected $primaryKey = 'id';
    protected $fillable = ['nombreRatio','valorGeneralRatio'];

    public function tipoEmpresas()
    {
        return $this->belongsToMany(TipoEmpresa::class, 'RatioTipo','idRatio','idTipoEmpresa');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
