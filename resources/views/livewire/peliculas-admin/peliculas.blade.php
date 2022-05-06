<div class="row">
    {{-- Vista reactiva de peliculas --}}

    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        @include("livewire.peliculas-admin.$view")
    </div>


    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        @include('livewire.peliculas-admin.table_peliculas')
    </div>

</div>
