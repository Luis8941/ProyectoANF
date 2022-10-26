<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatioTipo extends Model
{
    use HasFactory;
    protected $table= 'RatioTipo';
    protected $fillable = ['valorRatioTipo','idTipoEmpresa','idRatio'];
}
