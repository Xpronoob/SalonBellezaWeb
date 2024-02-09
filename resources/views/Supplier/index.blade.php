@extends('home3')
@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"> <br><br>

        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">provider_name</th>
                        <th scope="col">contact_number</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>
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

                        <!-- <td class="text-center">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$supplier->id}}">Editar</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal"  data-target="#delete{{$supplier->id}}">Eliminar</button>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

@endsection