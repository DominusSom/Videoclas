<!-- formulario de edición y creación de autores -->
<div class="form-group">
    <label for="autor">Autor*</label>
    <input type="text" class="form-control" wire:model="nombre">
    @error('nombre')
        <span>{{ $message }}</span>
    @enderror
</div>
