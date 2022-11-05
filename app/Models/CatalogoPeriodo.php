<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoPeriodo extends Model
{
    use HasFactory;
    protected $table= 'CatalogoPeriodo';
    protected $primaryKey = 'id';
    protected $fillable = ['saldo','idCatalogo','idPC'];
}
