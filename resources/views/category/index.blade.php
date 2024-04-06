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
    <div class="row bg-light">
    <div class="col-12 text-center">
        <h1 class="display-6 fw-bold mb-4 p-3 rounded bg-dark text-light">Módulo Categorías</h1>
    </div>
</div>


        <div class="row">
            <div class="col-12">
                <a href="{{ route('categorias.create') }}" class="btn btn-success mb-2">Nueva Categoría</a>
            </div>
        </div>

        <div class="row bg-light">
            <div class="col-12">
                <div class="card card-form">
                    <div class="row no-gutters">
                        <div class="col-lg-12 card-form__body">
                            <div class="table-responsive border-bottom" data-toggle="lists"
                                data-lists-values='["js-lists-values-employee-name"]'>
                                <form class="d-flex mb-3" role="search">
                                    <input name="busqueda" class="form-control me-2" type="search"
                                        placeholder="Buscar por nombre" aria-label="Search">
                                    <button class="btn btn-success" type="submit">Buscar</button>
                                </form>

                                <table class="table mb-0 thead-border-top-0">
                                    <thead>
                                        <tr>
                                            <th>Nombre Categoria</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="staff02">
                                        @foreach ($categories as $category)
                                            <tr class="">
                                                {{-- <td scope="row">{{ $category->id_category }}</td> --}}
                                                <td>{{ $category->name }}</td>
                                                <td class="text-center">
                                                    <div class="">
                                                        <a href="{{ route('categorias.edit', $category->id) }}"
                                                            class="btn btn-success">Editar</a>
                                                        <form id="deleteForm" action="{{ route('categorias.destroy', $category->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <!-- Botón de eliminación que abre el modal -->
                                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#modal-danger">Eliminar</button>
                                                        </form>
                                                    </div>
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
                <td colspan=4>{{ $categories->appends(['busqueda' => $busqueda]) }} </td>
            </div>
        </div>
    </div>
</x-main-layout>
