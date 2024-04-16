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

    <div class="col-12 text-center">
        <h1 class="display-6 fw-bold mb-4 p-3 rounded bg-dark text-light">Módulo Contabilidad</h1>
    </div>

    <a href="{{ route('contabilidad.create') }}">
        <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#create">Nuevo
            Registro</button>
    </a>

    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-12 card-form__body">
                <div class="table-responsive border-bottom" data-toggle="lists"
                    data-lists-values='["js-lists-values-employee-name"]'>
                    <form class="d-flex" role="search">
                        <input name="busqueda" class="form-control me-2" type="search"
                            placeholder="Buscar por la descripcion" aria-label="Search">
                        <button class="btn btn-success" type="submit">Buscar</button>
                    </form>
                    <table class="table mb-0 thead-border-top-0">
                        <thead>
                            <tr>
                                <th>Descripcion del movimiento</th>
                                <th>Cantidad</th>
                                <th>Fecha</th>
                                <th>Tipo de movimiento</th>
                                <th>Tipo de transacción</th>
                                <th>Saldo pendiente</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="staff02">
                            @foreach ($accountings as $accounting)
                                <tr class="">
                                    <td>{{ $accounting->movement_description }}</td>
                                    <td>{{ $accounting->amount }}</td>
                                    <td>{{ $accounting->movement_date }}</td>
                                    <td>{{ $accounting->movement_type }}</td>
                                    <td>{{ $accounting->transaction_type }}</td>
                                    <td>{{ $accounting->pending_balance }}</td>
                                    <td class="text-center">
                                        <style>
                                            .btn-group .btn {
                                                max-height: 30px;
                                                /* Cambia el valor según lo necesites */
                                            }
                                        </style>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('contabilidad.edit', $accounting->id) }}"
                                                class="btn btn-success">Editar</a>
                                            <form id="deleteForm_{{ $accounting->id }}"
                                                action="{{ route('contabilidad.destroy', $accounting->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <!-- Botón de eliminación que abre el modal -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modal-danger"
                                                    onclick="confirmDelete({{ $accounting->id }})">Eliminar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <tr>
            <td colspan=4>{{ $accountings->appends(['busqueda' => $busqueda]) }} </td>
        </tr>
    </div>

    <div class="alert alert-info" role="alert">
        Total de Saldo Pendiente: <strong>{{ $totalPendingBalance }}</strong>
    </div>

    <script>
        function confirmDelete(accountingId) {
            // Configura el formulario con el ID correspondiente al movimiento de contabilidad
            var formId = 'deleteForm_' + accountingId;
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
</x-main-layout>
