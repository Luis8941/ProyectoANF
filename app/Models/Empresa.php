<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table= 'Empresa';
    protected $primaryKey = 'idEmpresa';
    protected $fillable = ['nombre','sector'];

    public function catalogosE()
    {
        return $this->hasMany(Catalogo::class);
    }

    public function ratioE()
    {
        return $this->hasMany(Ratio::class);
    }
}
