<!-- buscador -->
<div class="row">

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h3>Películas</h3>
    </div>

    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

        <input wire:model="search" class="form-control" placeholder="Buscar...">
    </div>
</div>
<!-- fin buscador -->

<!-- tabla pelicula -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @if ($peliculas->count())
            <div class="table-responsive">
                <table class="table table-striped  table-condensed ">
                    <thead>
                        <th>Id Película</th>
                        <th>Categoría</th>
                        <th>Autor</th>
                        <th>Nombre</th>
                        <th>Fecha Lanzamineto</th>
                        <th>Productora</th>
                    </thead>
                    @foreach ($peliculas as $p)
                        <tr>
                            <td>{{ $p->id_pelicula }}</td>
                            <td>{{ $p->categoria }}</td>
                            <td>{{ $p->autor }}</td>
                            <td>{{ $p->nombre }}</td>
                            <td>{{ $p->fecha_lanzamiento }}</td>
                            <td>{{ $p->productora }}</td>
                            <td>
                                <button wire:click="edit({{ $p->id_pelicula }})" class="btn btn-success">
                                    Editar
                                </button>
                                <button wire:click="destroy({{ $p->id_pelicula }})" class="btn btn-danger">
                                    Eliminar
                                </button>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- paginación  -->
            <div class="card-footer">
                {{ $peliculas->links() }}
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