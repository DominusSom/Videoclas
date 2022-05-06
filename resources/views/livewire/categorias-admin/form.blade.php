<!-- formulario de edición y creación de categorías -->
<div class="form-group">
    <label for="autor">Categoría*</label>
    <input type="text" class="form-control" wire:model="nombre">
    @error('nombre')
        <span>{{ $message }}</span>
    @enderror
</div>
