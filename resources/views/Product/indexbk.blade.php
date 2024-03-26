<x-main-layout>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('deleted'))
        <div class="alert alert-danger">
            {{ session('deleted') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <br>
    <a href="{{ route('productos.create') }}"><button type="button" class="btn btn-primary mb-2" data-toggle="modal"
            data-target="#create">
            Nuevo </button></a>
    <br>
    <div class="card card-form">
        <div class="row no-gutters">

            <div class="col-lg-12 card-form__body">

                <div class="table-responsive border-bottom" data-toggle="lists"
                    data-lists-values='["js-lists-values-employee-name"]'>

                    <form class="d-flex" role="search">
                        <input name="busqueda" class="form-control me-2" type="search"
                            placeholder="Buscar por nombre o descripción" aria-label="Search">
                        <button class="btn btn-success" type="submit">Buscar</button>
                    </form>

                    <table class="table mb-0 thead-border-top-0" style="table-layout: fixed;">
                        <thead>
                            <tr>
                                <th>Nombre Producto</th>
                                <th>Descripción</th>
                                <th>Cantidad en Stock</th>
                                <th>Precio de Compra</th>
                                <th>Precio de Venta</th>
                                <th>Categoría</th>
                                <th>Proveedor</th>

                                {{-- <th style="width: 24px;">Acciones</th> --}}
                            </tr>
                        </thead>
                        <tbody class="list" id="staff02">
                            @foreach ($products as $product)
                                <tr class="">
                                    {{-- <td scope="row">{{ $product->id_product }}</td> --}}

                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->purchase_price }}</td>
                                    <td>{{ $product->selling_price }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->supplier }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('productos.edit', $product->id) }}"><button type="button"
                                                class="btn btn-success">Editar</button></a>
                                    </td>
                                    <td class="text-center">
                                        <form id="deleteForm" action="{{ route('productos.destroy', $product->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <!-- Botón de eliminación que abre el modal -->
                                            <button type="button" class="btn btn-danger mt-3" data-toggle="modal"
                                                data-target="#modal-danger">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <script>
                                    $(document).ready(function() {
                                        // Maneja el clic en el botón de confirmación del modal
                                        $('#confirmDeleteButton').click(function() {
                                            // Envía el formulario para ejecutar la solicitud DELETE
                                            $('#deleteForm').submit();
                                        });
                                    });
                                </script>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

    </div>

    <!-- {{ $products->links() }} -->
    <tr>
        <td colspan=4>{{ $products->appends(['busqueda' => $busqueda]) }} </td>
    </tr>

    </div>
</x-main-layout>
