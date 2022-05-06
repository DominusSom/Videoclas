<div class="row">
    {{-- Vista reactiva de categorias --}}

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        @include("livewire.categorias-admin.$view")
    </div>


    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        @include('livewire.categorias-admin.table')
    </div>

</div>