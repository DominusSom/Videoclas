<?php

namespace App\Http\Livewire\PeliculasAdmin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Peliculass;
use DB;


class Peliculas extends Component
{
    //Uso de la paginación
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $view = 'create';
    public $id_pelicula, $id_categoria, $id_autor, $nombre, $fecha_lanzamiento, $productora;
    public $search;


    public function render()
    {
        //consulta a base de datos para el index
        $autores = DB::table('autores')->get();
        $categorias = DB::table('categorias')->get();
        $peliculas = DB::table('peliculas as p')
            ->join('autores as au', 'p.id_autor', 'au.id_autor')
            ->join('categorias as cat', 'p.id_categoria', 'cat.id_categoria')
            ->select('p.id_pelicula', 'cat.nombre as categoria', 'au.nombre as autor', 'p.nombre', 'p.fecha_lanzamiento', 'p.productora')
            ->where('p.nombre','LIKE','%'.$this->search.'%')
            ->orwhere('cat.nombre','LIKE','%'.$this->search.'%')
            ->orwhere('au.nombre','LIKE','%'.$this->search.'%')
            ->orwhere('p.productora','LIKE','%'.$this->search.'%')
            ->orderBy('p.id_pelicula','desc')
            ->paginate(8);

        return view('livewire.peliculas-admin.peliculas', compact('peliculas', 'autores', 'categorias'));
    }

    public function edit($id)
    {
        $pelicula = Peliculass::find($id);
        $this->id_pelicula = $pelicula->id_pelicula;
        $this->id_categoria = $pelicula->id_categoria;
        $this->id_autor = $pelicula->id_autor;
        $this->nombre = $pelicula->nombre;
        $this->fecha_lanzamiento = $pelicula->fecha_lanzamiento;
        $this->productora = $pelicula->productora;

        $this->view = 'edit';
    }
    public function update()
    {
        $this->validate([

            'id_categoria' => 'required',
            'id_autor' => 'required',
            'nombre' => 'required',
            'fecha_lanzamiento' => 'required',
            'productora' => 'required',
        ]);

        $pelicula = Peliculass::find($this->id_pelicula);

        $pelicula->update([
            'id_categoria' => $this->id_categoria,
            'id_autor' => $this->id_autor,
            'nombre' => $this->nombre,
            'fecha_lanzamiento' => $this->fecha_lanzamiento,
            'productora' => $this->productora,
        ]);
        $this->default();
        
    }

    public function store()
    {
        $this->validate([

            'id_categoria' => 'required',
            'id_autor' => 'required',
            'nombre' => 'required',
            'fecha_lanzamiento' => 'required',
            'productora' => 'required',
        ]);

        Peliculass::create([
            'id_categoria' => $this->id_categoria,
            'id_autor' => $this->id_autor,
            'nombre' => $this->nombre,
            'fecha_lanzamiento' => $this->fecha_lanzamiento,
            'productora' => $this->productora,
        ]);

        $this->default();
    }

    public function destroy($id)
    {
        Peliculass::destroy($id);
    }

    public function default()
    {
        $this->id_categoria = '';
        $this->id_autor = '';
        $this->nombre = '';
        $this->fecha_lanzamiento = '';
        $this->productora = '';

        $this->view = 'create';
    }
}
