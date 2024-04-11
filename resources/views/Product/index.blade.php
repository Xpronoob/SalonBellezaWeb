<x-main-layout>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('deleted'))
        <div class="alert alert-danger">{{ session('deleted') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-6 fw-bold mb-4 p-3 rounded bg-dark text-light">Módulo Productos</h1>
                <a href="{{ route('productos.create') }}" class="btn btn-primary mb-2">Nuevo Producto</a>
            </div>
        </div>

        <div class="row bg-light">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="d-flex mb-3" role="search">
                            <input name="busqueda" class="form-control me-2" type="search"
                                placeholder="Buscar por nombre o descripción" aria-label="Search">
                            <button class="btn btn-success" type="submit">Buscar</button>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre Producto</th>
                                        <th>Descripción</th>
                                        <th>Cantidad en Stock</th>
                                        <th>Precio de Compra</th>
                                        <th>Precio de Venta</th>
                                        <th>Categoría</th>
                                        <th>Proveedor</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->purchase_price }}</td>
        <td>{{ $product->selling_price }}</td>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->supplier->name }}</td>
        <td class="text-center">
             <style>
                                                    .btn-group .btn {
                                                        max-height: 30px; /* Cambia el valor según lo necesites */
                                                    }
                                                </style>
            <div class="btn-group" role="group">
                <a href="{{ route('productos.edit', $product->id) }}" class="btn btn-success">Editar</a>
                <form id="deleteForm_{{ $product->id }}" action="{{ route('productos.destroy', $product->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <!-- Botón de eliminación que abre el modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" onclick="confirmDelete({{ $product->id }})">Eliminar</button>
                </form>
            </div>
        </td>
    </tr>
@endforeach

<script>
    function confirmDelete(productId) {
        // Configura el formulario con el ID correspondiente al producto
        var formId = 'deleteForm_' + productId;
        var form = document.getElementById(formId);

        // Configura el modal para mostrar el mensaje de confirmación
        $('#modal-danger').modal('show');

        // Maneja el clic en el botón de confirmación del modal
        $('#confirmDeleteButton').click(function() {
            // Envía el formulario para ejecutar la solicitud DELETE
            form.submit();
        });
    }
</script>
                                </tbody>
                            </table>
                        </div>

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                {{ $products->appends(['busqueda' => $busqueda])->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
