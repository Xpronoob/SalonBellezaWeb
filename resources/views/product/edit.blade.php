<x-main-layout>
    <form action="{{ route('productos.update', $product->id_product) }}" method="post" enctype="multipart/form-data">
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
                                <label for="product_name">Nombre del Producto</label>
                                <input type="text" class="form-control" name="product_name" id="product_name"
                                 placeholder="Ingrese el nombre del product" value="{{ $product->product_name }}"/>
                                @error('product_name')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                        </div>

                            <div class="form-group">
                                <label for="product_description">Descripción del Producto</label>
                                <input type="text" class="form-control" name="product_description" id="product_description"
                                  placeholder="Ingrese la descripción del producto" value="{{ $product->product_description }}"/>
                                @error('product_description')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                           
                            <div class="form-group">
                                <label for="stock_quantity" >Cantidad en Stock</label>
                                <input type="number" class="form-control" name="stock_quantity" id="stock_quantity"
                                placeholder="Ingrese la cantidad en stock" value="{{ $product->stock_quantity }}"/>
                                @error('stock_quantity')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                      
                        
                            <div class="form-group">
                                <label for="purchase_price">Precio de Compra</label>
                                <input type="text" class="form-control"  name="purchase_price" id="purchase_price"
                                 placeholder="Ingrese el precio de compra" value="{{ $product->purchase_price }}"/>
                                @error('purchase_price')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="selling_price">Precio de Venta</label>
                                <input type="text" class="form-control"  name="selling_price" id="selling_price"
                                  placeholder="Ingrese el precio de venta" value="{{ $product->selling_price }}"/>
                                @error('selling_price')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="categoria">Categoría</label>
                                <input type="text" class="form-control"  name="categoria" id="categoria"
                                   placeholder="Ingrese la categoría" value="{{ $product->categoria }}"/>
                                @error('categoria')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="producto">Proveedor</label>
                                <input type="text" class="form-control" name="producto" id="producto"
                                 placeholder="Ingrese el producto" value="{{ $product->producto}}"/>
                                @error('producto')
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
