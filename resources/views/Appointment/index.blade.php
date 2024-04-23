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
                <h1 class="display-6 fw-bold mb-4 p-3 rounded bg-dark text-light">Módulo Citas</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{ route('citas.create') }}" class="btn btn-success mb-2">Nueva Cita</a>
            </div>
        </div>

        <div class="row bg-light">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="d-flex mb-3" role="search">
                            <input name="busqueda" class="form-control me-2" type="search"
                                placeholder="Buscar por estilista o locación" aria-label="Search">
                            <button class="btn btn-success" type="submit">Buscar</button>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Locación</th>
                                        <th>Fecha</th>
                                        <th>Estilista</th>
                                        <th>Cliente</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                        <tr>
                                            <td>{{ $appointment->location }}</td>
                                            <td>{{ $appointment->appointment_date }}</td>
                                            <td>{{ $appointment->stylist }}</td>
                                            <td>{{ $appointment->user->email }}</td>
                                            <td>{{ $appointment->description }}</td>
                                            <td>{{ $appointment->cost }}</td>
                                            <td class="text-center">
                                                <style>
                                                    .btn-group .btn {
                                                        max-height: 30px;
                                                     
                                                    }
                                                </style>
                                                
                                     <div class="btn-group" role="group">
                                        <a href="{{ route('citas.edit', $appointment->id) }}" class="btn btn-success">
                                         <i class="fas fa-pencil-alt" style="font-size: 1rem;"></i> 
                                        </a>
                                          <form id="deleteForm_{{ $appointment->id }}" action="{{ route('citas.destroy', $appointment->id) }}" method="POST" style="display: inline;">
                                          @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" onclick="confirmDelete({{ $appointment->id }})">
                                                <i class="fas fa-trash-alt" style="font-size: 1rem;"></i> <!-- Icono de basurero -->
                                            </button>
                                        </form>
                                    </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                {{ $appointments->appends(['busqueda' => $busqueda])->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>

<script>
    function confirmDelete(appointmentId) {
        // Configura el formulario con el ID correspondiente al proveedor
        var formId = 'deleteForm_' + appointmentId;
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
