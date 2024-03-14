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

    <a href="{{ route('servicios.create') }}"><button type="button" class="btn btn-primary mb-2" data-toggle="modal"
            data-target="#create">
            Nuevo </button></a>

    <div class="card card-form">
        <div class="row no-gutters">

            <div class="col-lg-12 card-form__body">

                <div class="table-responsive border-bottom" data-toggle="lists"
                    data-lists-values='["js-lists-values-employee-name"]'>


                    <div class="search-form search-form--light m-3">
                        <input type="text" class="form-control search" placeholder="Search">
                        <button class="btn" type="button"><i class="material-icons">search</i></button>
                    </div>

                    <table class="table mb-0 thead-border-top-0">
                        <thead>
                            <tr>
                            <th>Título del Servicio</th>
                            <th >Descripción</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                             <th>Acciones</th>
                                {{-- <th style="width: 24px;">Acciones</th> --}}
                            </tr>
                        </thead>
                        <tbody class="list" id="staff02">
                            @foreach ($services as $service)
                                <tr class="">
                                {{--    <td scope="row">{{ $service->id_service}}</td> --}}
                                <td>{{ $service->service_title }}</td>
                                <td>{{ $service->description }}</td>
                                <td><img src="{{ $service->image_url }}" alt="Imagen de servicio" style="max-width: 100px;">
                                </td>
                                <td class="text-center">
                                        <a href="{{ route('servicios.edit', $service->id_service) }}"><button
                                                type="button" class="btn btn-success">Editar</button></a>
                                    </td>
                                <td class="text-center">
                                        <form id="deleteForm"
                                            action="{{ route('servicios.destroy', $service->id_service) }}"
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

</x-main-layout>