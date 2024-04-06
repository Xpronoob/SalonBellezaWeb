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
            <div class="col-md-6">
                <h2 class="mb-3">Listado de Productos</h2>
            </div>
            <div class="col-md-6 text-md-end">
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
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('productos.edit', $product->id) }}"
                                                        class="btn btn-success">Editar</a>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#modal-danger">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
