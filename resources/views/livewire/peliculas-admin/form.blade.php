<!-- formulario de edición y creación de película -->

<div class="form-group">
    <label for="id_categoria">Categoría*</label>
    <select name="id_categoria" class="form-control select2" wire:model="id_categoria">
        <option selected>Seleccionar</option>
        @foreach ($categorias as $cat)
            <option value="{{ $cat->id_categoria }}">{{ $cat->nombre }}</option>
        @endforeach
    </select>
    @error('id_categoria')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="autor">Autor*</label>
    <select name="id_autor" class="form-control select2" wire:model="id_autor">
        <option selected>Seleccionar</option>
        @foreach ($autores as $aut)
            <option value="{{ $aut->id_autor }}">{{ $aut->nombre }}</option>
        @endforeach
    </select>
    @error('id_autor')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="autor">Nombre*</label>
    <input type="text" class="form-control" wire:model="nombre">
    @error('nombre')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="fecha_lanzamiento">Fecha de lanzamiento*</label>
    <input type="date" class="form-control" wire:model="fecha_lanzamiento">
    @error('fecha_lanzamiento')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="productora">Productora*</label>
    <input type="text" class="form-control" wire:model="productora">
    @error('productora')
        <span>{{ $message }}</span>
    @enderror
</div>
