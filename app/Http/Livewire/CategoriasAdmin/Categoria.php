<?php

namespace App\Http\Livewire\CategoriasAdmin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Categorias;
use DB;

class Categoria extends Component
{
    //Uso de la paginación
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $view = 'create';
    public $id_categoria, $nombre;
    public $search;
    public function render()
    {
        $categorias = DB::table('categorias as cat')
            ->select('cat.id_categoria', 'cat.nombre')
            ->where('cat.nombre', 'LIKE', '%' . $this->search . '%')
            ->orderBy('cat.id_categoria', 'desc')
            ->paginate(8);

        return view('livewire.categorias-admin.categoria', compact('categorias'));
    }

    public function edit($id)
    {
        $categoria = Categorias::find($id);
        $this->id_categoria = $categoria->id_categoria;
        $this->nombre = $categoria->nombre;
        $this->view = 'edit';
    }
    public function update()
    {
        $this->validate([
            'nombre' => 'required',
        ]);

        $categoria = Categorias::find($this->id_categoria);

        $categoria->update([
            'nombre' => $this->nombre,
        ]);
        $this->default();
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
        ]);

        Categorias::create([
            'nombre' => $this->nombre,
        ]);

        $this->default();
    }

    public function destroy($id)
    {
        Categorias::destroy($id);
    }

    public function default()
    {
        $this->id_categoria = '';
        $this->nombre = '';

        $this->view = 'create';
    }
}
