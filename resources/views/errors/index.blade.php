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
                <h1 class="display-6 fw-bold mb-4 p-3 rounded bg-dark text-light">Módulo Errores</h1>
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
                                        <th>Excepción</th>
                                        <th>Mensaje de Error</th>
                                        <th>Creado</th>
                                        <th>Actualizado</th>
                                        <th>Nombre Usuario</th>
                                        <th>Correo Usuario</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($errors as $error)
                                        <tr>
                                            <td>{{ $error->exception }}</td>
                                            <td>{{ $error->error_message }}</td>
                                            <td>{{ $error->created_at->format('d/m/Y H:i:s') }}</td>
                                            <td>{{ $error->updated_at->format('d/m/Y H:i:s') }}</td>
                                            <td>{{ $error->user->name }}</td>
                                            <td>{{ $error->user->email }}</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group">
                                                    {{-- <a href="{{ route('errors.edit', $error->id) }}"
                                                        class="btn btn-success">Editar</a> --}}
                                                    {{-- <form id="deleteForm_{{ $error->id }}"
                                                        action="{{ route('errors.destroy', $error->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger"
                                                            data-toggle="modal" data-target="#modal-danger"
                                                            onclick="confirmDelete({{ $error->id }})">Eliminar</button>
                                                    </form> --}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    <script>
                                        function confirmDelete(errorId) {
                                            var formId = 'deleteForm_' + errorId;
                                            var form = document.getElementById(formId);
                                            $('#modal-danger').modal('show');
                                            $('#confirmDeleteButton').click(function() {
                                                form.submit();
                                            });
                                        }
                                    </script>
                                </tbody>
                            </table>
                        </div>

                        {{-- <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                {{ $errors->appends(['busqueda' => $busqueda])->links() }}
                            </ul>
                        </nav> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
