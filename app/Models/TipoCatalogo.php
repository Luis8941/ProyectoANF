<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCatalogo extends Model
{
    use HasFactory;
    protected $table= 'TipoCatalogo';
    protected $primaryKey = 'idCatalogo';
    protected $fillable = ['nomTipoCatalogo'];

    public function catalogosTC()
    {
        return $this->hasMany(Catalogo::class);
    }
}
