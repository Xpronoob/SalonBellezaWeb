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

    {{-- @if ($lowStockProducts->isNotEmpty())
        <div class="alert alert-warning" role="alert">
            <p>Algunos productos tienen un stock menor a 20:</p>
            <ul>
                @foreach ($lowStockProducts as $product)
                    <li>{{ $product->name }} - Stock Restante: {{ $product->stock }}</li>
                @endforeach
            </ul>
            <p>¡Por favor, reabastece el inventario!</p>
        </div>
    @endif --}}

    <div class="col-12 text-center">
        <h1 class="display-6 fw-bold mb-4 p-3 rounded bg-dark text-light">Módulo de Servicios</h1>
    </div>


    <a href="{{ route('servicios.create') }}"><button type="button" class="btn btn-success mb-2" data-toggle="modal"
            data-target="#create">
            Nuevo Servicio</button></a>

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

                    <table class="table mb-0 thead-border-top-0">
                        <thead>
                            <tr>
                                <th>Título del Servicio</th>
                                <th>Descripción</th>
                                <th>Imagen</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="staff02">
                            @foreach ($services as $service)
                                <tr class="">
                                    {{--    <td scope="row">{{ $service->id_service}}</td> --}}
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td><img src="{{ $service->image }}" alt="Imagen de servicio"
                                            style="max-width: 100px;">
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('servicios.edit', $service->id) }}"><button type="button"
                                                    class="btn btn-success btn-action">
                                                    <i class="fas fa-pencil-alt" style="font-size: 1rem;"></i>
                                                </button></a>
                                            <form id="deleteForm_{{ $service->id }}"
                                                action="{{ route('servicios.destroy', $service->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <!-- Botón de eliminación que abre el modal -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modal-danger"
                                                    onclick="confirmDelete({{ $service->id }})">
                                                    <i class="fas fa-trash-alt" style="font-size: 1rem;"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <script>
                                function confirmDelete(serviceId) {
                                    // Configura el formulario con el ID correspondiente al proveedor
                                    var formId = 'deleteForm_' + serviceId;
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
            </div>
        </div>
        <tr>
            <td colspan=4>{{ $services->appends(['busqueda' => $busqueda]) }} </td>
        </tr>
    </div>

</x-main-layout>
