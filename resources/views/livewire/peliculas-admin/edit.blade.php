<h2>Editar Película</h2>

@include('livewire.peliculas-admin.form')

<button wire:click="update" class="btn btn-success">   
    Actualizar
</button>

<button wire:click="default" class="btn btn-secondary">   
    Cancelar
</button>