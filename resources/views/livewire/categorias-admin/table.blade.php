<!-- buscador -->
<div class="row">

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h3>Categorías</h3>
    </div>

    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

        <input wire:model="search" class="form-control" placeholder="Buscar...">
    </div>
</div>
<!-- fin buscador -->

<!-- tabla pelicula -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @if ($categorias->count())
            <div class="table-responsive">
                <table class="table table-striped  table-condensed ">
                    <thead>
                        <th>Id Categoría</th>
                        <th>Categoría</th>
                    </thead>
                    @foreach ($categorias as $cat)
                        <tr>
                            <td>{{ $cat->id_categoria }}</td>
                            <td>{{ $cat->nombre }}</td>
                            <td>
                                <button wire:click="edit({{ $cat->id_categoria }})" class="btn btn-success">
                                    Editar
                                </button>
                                <button wire:click="destroy({{ $cat->id_categoria }})" class="btn btn-danger">
                                    Eliminar
                                </button>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- paginación  -->
            <div class="card-footer">
                {{ $categorias->links() }}
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