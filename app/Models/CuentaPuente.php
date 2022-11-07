<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaPuente extends Model
{
    use HasFactory;

    protected $table= 'CuentaPuente';
    protected $primaryKey = 'id';

    public function catalogosCP()
    {
        return $this->hasMany(Catalogo::class);
    }
}
