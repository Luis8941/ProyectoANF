<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatioTipo extends Model
{
    use HasFactory;
    protected $table= 'RatioTipo';
    protected $primaryKey = 'id';
    protected $fillable = ['valorRatioTipo','idTipoEmpresa','idRatio'];
}
