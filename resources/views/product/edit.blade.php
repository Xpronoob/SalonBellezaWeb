<x-main-layout>
    <form action="{{ route('productos.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-4 card-body">
                    <p><strong class="headings-color">Editar Producto</strong></p>
                    <p class="text-muted">Puedes editar la información de los productos.</p>
                </div>
                <div class="col-lg-8 card-form__body card-body">
                    <form>


                        <div class="form-group">
                            <label for="name">Nombre del Producto</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Ingrese el nombre del product" value="{{ $product->name }}" />
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
                            <input type="text" class="form-control" name="category" id="category"
                                placeholder="Ingrese la categoría" value="{{ $product->category }}" />
                            @error('category')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="supplier">Proveedor</label>
                            <input type="text" class="form-control" name="supplier" id="supplier"
                                placeholder="Ingrese el producto" value="{{ $product->supplier }}" />
                            @error('supplier')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="modal-footer">
                            <a href="{{ route('productos.index') }}"><button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Volver</button></a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</x-main-layout>
