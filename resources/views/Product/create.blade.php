<x-main-layout>
    <form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-4 card-body">
                    <p><strong class="headings-color">Nuevo Producto</strong></p>
                    <p class="text-muted">Puedes agregar nuevos productos y vincularlos con los productos que
                        distribuyen para llevar un mejor control.</p>
                </div>
                <div class="col-lg-8 card-form__body card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre del Producto</label>
                            <input type="text" class="form-control" for="name" name="name" id="name"
                                placeholder="Ingrese el nombre del producto" />
                            @error('name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción del Producto</label>
                            <input type="text" class="form-control" for="description" name="description"
                                id="description" placeholder="Ingrese la descripción del producto" />
                            @error('description')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="stock">Cantidad en Stock</label>
                            <input type="number" class="form-control" for="stock" name="stock" id="stock"
                                placeholder="Ingrese la cantidad en stock" />
                            @error('stock')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="purchase_price">Precio de Compra</label>
                            <input type="text" class="form-control" for="purchase_price" name="purchase_price"
                                id="purchase_price" placeholder="Ingrese el precio de compra" />
                            @error('purchase_price')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="selling_price">Precio de Venta</label>
                            <input type="text" class="form-control" for="selling_price" name="selling_price"
                                id="selling_price" placeholder="Ingrese el precio de venta" />
                            @error('selling_price')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category">Categoría</label>
                            <input type="text" class="form-control" for="category" name="category" id="category"
                                placeholder="Ingrese la categoría" />
                            @error('category')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="supplier">Proveedor</label>
                            <input type="text" class="form-control" for="supplier" name="supplier" id="supplier"
                                placeholder="Ingrese el supplier" />
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
