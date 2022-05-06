<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculass extends Model
{
    protected $table='peliculas';
    protected $primaryKey='id_pelicula';
    public $timestamps = false;

    protected $fillable = [

        'id_pelicula',
        'id_categoria',
        'id_autor',
        'nombre',
        'fecha_lanzamiento',
        'productora',
    ];
    protected $guarder=[

    ];
}
