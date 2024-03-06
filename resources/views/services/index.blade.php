@extends('categoria')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Nuevo
            </button><br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Título del Servicio</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Imagen</th>
                            <th class="text-center" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr class="">
                                <td scope="row">{{ $service->id_service }}</td>
                                <td>{{ $service->service_title }}</td>
                                <td>{{ $service->description }}</td>
                                <td><img src="{{ $service->image_url }}" alt="Imagen de servicio" style="max-width: 100px;">
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#edit{{ $service->id_service }}">Editar</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#delete{{ $service->id_service }}">Eliminar</button>
                                </td>
                            </tr>
                            @include('Services.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('Services.create')
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
