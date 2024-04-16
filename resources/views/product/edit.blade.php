<x-main-layout>
    <form action="{{ route('productos.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card card-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 card-body">
                        <p><strong class="headings-color">Editar Producto</strong></p>
                        <p class="text-muted">Puedes editar la información de los productos.</p>
                    </div>
                    <div class="col-md-8 card-form__body card-body">
                        <div class="form-group">
                            <label for="name">Nombre del Producto</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Ingrese el nombre del producto" value="{{ $product->name }}" />
                            @error('name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción del Producto</label>
                            <input type="text" class="form-control" name="description" id="description"
                                placeholder="Ingrese la descripción del producto" value="{{ $product->description }}" />
                            @error('description')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="stock">Cantidad en Stock</label>
                            <input type="number" class="form-control" name="stock" id="stock"
                                placeholder="Ingrese la cantidad en stock" value="{{ $product->stock }}" />
                            @error('stock')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="purchase_price">Precio de Compra</label>
                            <input type="text" class="form-control" name="purchase_price" id="purchase_price"
                                placeholder="Ingrese el precio de compra" value="{{ $product->purchase_price }}" />
                            @error('purchase_price')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="selling_price">Precio de Venta</label>
                            <input type="text" class="form-control" name="selling_price" id="selling_price"
                                placeholder="Ingrese el precio de venta" value="{{ $product->selling_price }}" />
                            @error('selling_price')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category">Categoría</label>
                            <select name="id_category" id="id_category" class="form-control">
                                <option value="">--Seleccione una categoría--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $product->category->id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_category')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="supplier">Proveedor</label>
                            <select name="id_supplier" id="id_supplier" class="form-control">
                                <option value="">--Seleccione un proveedor--</option>
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}"
                                        {{ $product->supplier->id == $supplier->id ? 'selected' : '' }}>
                                        {{ $supplier->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_supplier')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">URL de la Imagen</label>
                            <input type="file" class="form-control" name="image" id="image"
                                placeholder="Ingrese la URL de la imagen">
                            @error('image')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                            @if ($product->image)
                                <div class="form-group">
                                    <label class="mt-2">Imagen Actual</label><br>
                                    <img style="max-width: 350px" src="{{ $product->image }}" alt="Imagen Actual">
                                </div>
                            @endif
                        </div>

                        <div class="form-group modal-footer">
                            <a href="{{ route('productos.index') }}">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                            </a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-main-layout>
