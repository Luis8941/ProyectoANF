<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEmpresa extends Model
{
    use HasFactory;
    protected $table= 'TipoEmpresa';
    protected $primaryKey = 'idTipoEmpresa';
    protected $fillable = ['nombreTipoEmpresa'];

    public function ratios()
    {
        return $this->belongsToMany(Ratio::class, 'RatioTipo','idTipoEmpresa', 'idRatio');
    }
}
