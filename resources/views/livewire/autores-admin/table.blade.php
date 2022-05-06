<!-- buscador -->
<div class="row">

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h3>Autores</h3>
    </div>

    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

        <input wire:model="search" class="form-control" placeholder="Buscar...">
    </div>
</div>
<!-- fin buscador -->

<!-- tabla autores -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @if ($autores->count())
            <div class="table-responsive">
                <table class="table table-striped  table-condensed ">
                    <thead>
                        <th>Id Autor</th>
                        <th>Autor</th>
                    </thead>
                    @foreach ($autores as $au)
                        <tr>
                            <td>{{ $au->id_autor }}</td>
                            <td>{{ $au->nombre }}</td>
                            <td>
                                <button wire:click="edit({{ $au->id_autor }})" class="btn btn-success">
                                    Editar
                                </button>
                                <button wire:click="destroy({{ $au->id_autor }})" class="btn btn-danger">
                                    Eliminar
                                </button>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- paginación  -->
            <div class="card-footer">
                {{ $autores->links() }}
            </div>
            <!-- si no encuentra registros devuelve el mensaje -->
        @else
            <div class="card-body">
                <strong>No se encontraron registros</strong>
            </div>
        @endif
    </div>

</div>
<!-- fin tabla -->
