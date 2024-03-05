<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"> <!-- Se ajusta el tamaño del modal a "modal-lg" para mantener el ancho actual -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- Cuerpo del Modal: -->
                <div class="modal-body" style="overflow-x: auto;"> <!-- Se permite el desplazamiento horizontal -->
                    <div class="row">
                        <!-- Primera columna -->
                        <div class="col-md-6">
                            <!-- Input Nombre del Producto -->
                            <div class="mb-3">
                                <label for="product_name" class="form-label">Nombre del Producto<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="product_name" id="product_name"
                                    aria-describedby="productNameHelp" placeholder="Ingrese el nombre del producto" required />
                            </div>

                            <!-- Input Descripción del Producto -->
                            <div class="mb-3">
                                <label for="product_description" class="form-label">Descripción del Producto</label>
                                <textarea class="form-control" name="product_description" id="product_description"
                                    aria-describedby="productDescriptionHelp" placeholder="Ingrese la descripción del producto"></textarea>
                            </div>

                            <!-- Input Cantidad en Stock -->
                            <div class="mb-3">
                                <label for="stock_quantity" class="form-label">Cantidad en Stock<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="stock_quantity" id="stock_quantity"
                                    aria-describedby="stockQuantityHelp" placeholder="Ingrese la cantidad en stock" required />
                            </div>
                        </div>
                        <!-- Segunda columna -->
                        <div class="col-md-6">
                            <!-- Input Precio de Compra -->
                            <div class="mb-3">
                                <label for="purchase_price" class="form-label">Precio de Compra</label>
                                <input type="text" class="form-control" name="purchase_price" id="purchase_price"
                                    aria-describedby="purchasePriceHelp" placeholder="Ingrese el precio de compra" />
                            </div>

                            <!-- Input Precio de Venta -->
                            <div class="mb-3">
                                <label for="selling_price" class="form-label">Precio de Venta</label>
                                <input type="text" class="form-control" name="selling_price" id="selling_price"
                                    aria-describedby="sellingPriceHelp" placeholder="Ingrese el precio de venta" />
                            </div>

                            <!-- Input Categoría -->
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Categoría<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="categoria" id="categoria"
                                    aria-describedby="categoriaHelp" placeholder="Ingrese la categoría" required />
                            </div>

                            <!-- Input Proveedor -->
                            <div class="mb-3">
                                <label for="proveedor" class="form-label">Proveedor<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="proveedor" id="proveedor"
                                    aria-describedby="proveedorHelp" placeholder="Ingrese el proveedor" required />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
