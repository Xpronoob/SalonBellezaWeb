<!-- Modal PARA EDITAR-->
<div class="modal fade" id="edit{{ $product->id_product }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('productos.update', $product->id_product) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Cuerpo del Modal: -->
                <div class="modal-body">

                    <!-- Input Nombre del Producto -->
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" name="product_name" id="product_name"
                            aria-describedby="productNameHelp" placeholder="Ingrese el nombre del producto"
                            value="{{ $product->product_name }}">
                    </div>

                    <!-- Input Descripción del Producto -->
                    <div class="mb-3">
                        <label for="product_description" class="form-label">Descripción del Producto</label>
                        <textarea class="form-control" name="product_description" id="product_description"
                            aria-describedby="productDescriptionHelp" placeholder="Ingrese la descripción del producto">{{ $product->product_description }}</textarea>
                    </div>

                    <!-- Input Cantidad en Stock -->
                    <div class="mb-3">
                        <label for="stock_quantity" class="form-label">Cantidad en Stock</label>
                        <input type="number" class="form-control" name="stock_quantity" id="stock_quantity"
                            aria-describedby="stockQuantityHelp" placeholder="Ingrese la cantidad en stock"
                            value="{{ $product->stock_quantity }}">
                    </div>

                    <!-- Input Precio de Compra -->
                    <div class="mb-3">
                        <label for="purchase_price" class="form-label">Precio de Compra</label>
                        <input type="text" class="form-control" name="purchase_price" id="purchase_price"
                            aria-describedby="purchasePriceHelp" placeholder="Ingrese el precio de compra"
                            value="{{ $product->purchase_price }}">
                    </div>

                    <!-- Input Precio de Venta -->
                    <div class="mb-3">
                        <label for="selling_price" class="form-label">Precio de Venta</label>
                        <input type="text" class="form-control" name="selling_price" id="selling_price"
                            aria-describedby="sellingPriceHelp" placeholder="Ingrese el precio de venta"
                            value="{{ $product->selling_price }}">
                    </div>

                    <!-- Input Categoría -->
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoría</label>
                        <input type="text" class="form-control" name="categoria" id="categoria"
                            aria-describedby="categoriaHelp" placeholder="Ingrese la categoría"
                            value="{{ $product->categoria }}">
                    </div>

                    <!-- Input Proveedor -->
                    <div class="mb-3">
                        <label for="proveedor" class="form-label">Proveedor</label>
                        <input type="text" class="form-control" name="proveedor" id="proveedor"
                            aria-describedby="proveedorHelp" placeholder="Ingrese el proveedor"
                            value="{{ $product->proveedor }}">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de borrar -->
<div class="modal fade" id="delete{{ $product->id_product }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('productos.destroy', $product->id_product) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <!-- Cuerpo del Modal: -->
                <div class="modal-body">
                    Estás seguro que quieres eliminar el producto: <strong> {{ $product->product_name }} ?</strong>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
