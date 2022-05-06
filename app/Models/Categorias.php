<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table='categorias';
    protected $primaryKey='id_categoria';
    public $timestamps = false;

    protected $fillable = [

        'id_categoria',
        'nombre',
    ];
    protected $guarder=[

    ];
}
