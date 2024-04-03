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
                                <label for="product_name">Nombre del Producto</label>
                                <input type="text" class="form-control" name="product_name" id="product_name"
                                 placeholder="Ingrese el nombre del producto" />
                                @error('product_name')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                        </div>

                            <div class="form-group">
                                <label for="product_description">Descripción del Producto</label>
                                <input type="text" class="form-control" name="product_description" id="product_description"
                                  placeholder="Ingrese la descripción del producto"/>
                                @error('product_description')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                           
                            <div class="form-group">
                                <label for="stock_quantity" >Cantidad en Stock</label>
                                <input type="number" class="form-control" name="stock_quantity" id="stock_quantity"
                                placeholder="Ingrese la cantidad en stock" />
                                @error('stock_quantity')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                      
                        
                            <div class="form-group">
                                <label for="purchase_price">Precio de Compra</label>
                                <input type="text" class="form-control"  name="purchase_price" id="purchase_price"
                                 placeholder="Ingrese el precio de compra" />
                                @error('purchase_price')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="selling_price">Precio de Venta</label>
                                <input type="text" class="form-control"  name="selling_price" id="selling_price"
                                  placeholder="Ingrese el precio de venta" />
                                @error('selling_price')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="categoria">Categoría</label>
                                <select name="id_category" id="categoria" class="form-control">
                               <option value=""> --Escoga una categoria--</option>

                                   @foreach ($categories as $categories)
                                    <option value="{{$categories ->id }}">{{$categories ->category_name }}</option>
                                    @endforeach
                                </select>
                                @error('categoria')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="proveedor">Proveedor</label>
                                <select name="id_supplier" id="proveedor" class="form-control">
                               <option value=""> --Escoga un proveedor--</option>

                                   @foreach ($suppliers as $suppliers)
                                    <option value="{{$suppliers ->id }}">{{$suppliers ->provider_name }}</option>
                                    @endforeach
                                </select>
                                @error('proveedor')
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
