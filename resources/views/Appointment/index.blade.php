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
                <a href="{{ route('citas.create') }}" class="btn btn-primary mb-2">Nueva Cita</a>
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
                                            <td>{{ $appointment->description }}</td>
                                            <td>{{ $appointment->cost }}</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('citas.edit', $appointment->id) }}"
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
                                {{ $appointments->appends(['busqueda' => $busqueda])->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
