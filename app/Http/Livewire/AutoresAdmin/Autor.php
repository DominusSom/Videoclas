<?php

namespace App\Http\Livewire\AutoresAdmin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Autores;
use DB;

class Autor extends Component
{
    //Uso de la paginación
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $view = 'create';
    public $id_autor, $nombre;
    public $search;

    public function render()
    {
        $autores = DB::table('autores as au')
            ->select('au.id_autor', 'au.nombre')
            ->where('au.nombre', 'LIKE', '%' . $this->search . '%')
            ->orderBy('au.id_autor', 'desc')
            ->paginate(8);
        return view('livewire.autores-admin.autor',compact('autores'));
    }

    public function edit($id)
    {
        $autores = Autores::find($id);
        $this->id_autor = $autores->id_autor;
        $this->nombre = $autores->nombre;
        $this->view = 'edit';
    }
    public function update()
    {
        $this->validate([
            'nombre' => 'required',
        ]);

        $autores = Autores::find($this->id_autor);

        $autores->update([
            'nombre' => $this->nombre,
        ]);
        $this->default();
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
        ]);

        Autores::create([
            'nombre' => $this->nombre,
        ]);

        $this->default();
    }

    public function destroy($id)
    {
        Autores::destroy($id);
    }

    public function default()
    {
        $this->id_autor = '';
        $this->nombre = '';

        $this->view = 'create';
    }
}
