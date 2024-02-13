@extends('proveedor')
@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"> <br><br>

     <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            Nuevo
        </button><br><br>

        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre Proveedor</th>
                        <th scope="col">Número Contacto</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Dirección</th>
                        <th class="text-center" scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($suppliers as $supplier)
                    <tr class="">
                        <td scope="row">{{$supplier->id_supplier}}</td>
                        <td>{{$supplier->provider_name}}</td>
                        <td>{{$supplier->contact_number}}</td>
                        <td>{{$supplier->email}}</td>
                        <td>{{$supplier->address}}</td>

                        <td class="text-center">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$supplier->id_supplier}}">Editar</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal"  data-target="#delete{{$supplier->id_supplier}}">Eliminar</button>
                        </td>
                    </tr>
                    @include('Supplier.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('Supplier.create')
    </div>
    <div class="col-md-2"></div>
</div>

@endsection
