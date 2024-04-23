<x-main-layout>
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-8">
                <div class="card-form__body card-body">
                    <form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nombre del Producto</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Ingrese el nombre del producto" value="{{ old('name') }}">
                                    @error('name')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Descripción del Producto</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"
                                        placeholder="Ingrese la descripción del producto">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="categoria">Categoría</label>
                                    <select name="id_category" id="id_category" class="form-control">
                                        <option value=""> --Seleccione una categoría--</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('id_category') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_category')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="proveedor">Proveedor</label>
                                    <select name="id_supplier" id="id_supplier" class="form-control">
                                        <option value=""> --Seleccione un proveedor--</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}"
                                                {{ old('id_supplier') == $supplier->id ? 'selected' : '' }}>
                                                {{ $supplier->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_supplier')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stock">Cantidad en Stock</label>
                                    <input type="text" class="form-control" id="stock" name="stock"
                                        placeholder="Ingrese la cantidad en stock" value="{{ old('stock') }}">
                                    @error('stock')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="purchase_price">Precio de Compra</label>
                                    <input type="text" class="form-control" id="purchase_price" name="purchase_price"
                                        placeholder="Ingrese el precio de compra" value="{{ old('purchase_price') }}">
                                    @error('purchase_price')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="selling_price">Precio de Venta</label>
                                    <input type="text" class="form-control" id="selling_price" name="selling_price"
                                        placeholder="Ingrese el precio de venta" value="{{ old('selling_price') }}">
                                    @error('selling_price')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">

                                    <label for="image">Subir imagen</label>
                                    <input type="file" class="form-control" name="image" id="image"
                                        placeholder="Ingrese la URL de la imagen">
                                    @error('image')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="hidden" name="default_image" value="{{ asset('assets/assetsUser/img/123.png') }}">

                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="{{ route('productos.index') }}"><button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Volver</button></a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">Nuevo Producto</strong></p>
                <p class="text-muted">Puedes agregar nuevos productos y vincularlos con los productos que
                    distribuyen para llevar un mejor control.</p>
            </div>
        </div>
    </div>
</x-main-layout>
