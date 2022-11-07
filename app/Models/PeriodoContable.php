<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodoContable extends Model
{
    use HasFactory;
    protected $table= 'PeriodoContable';
    protected $primaryKey = 'id';
    protected $fillable = ['año','desde','hasta'];

    public function catalogos()
    {
        return $this->belongsToMany(Catalogo::class, 'CatalogoPeriodo', 'idPC','idCatalogo');
    }
}
