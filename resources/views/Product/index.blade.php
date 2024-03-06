@extends('categoria')
@section('content')
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <br><br>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Nuevo
            </button><br><br>

            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre Producto</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Cantidad en Stock</th>
                            <th scope="col">Precio de Compra</th>
                            <th scope="col">Precio de Venta</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Proveedor</th>
                            <th class="text-center" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="">
                                <td scope="row">{{ $product->id_product }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_description }}</td>
                                <td>{{ $product->stock_quantity }}</td>
                                <td>{{ $product->purchase_price }}</td>
                                <td>{{ $product->selling_price }}</td>
                                <td>{{ $product->categoria }}</td>
                                <td>{{ $product->proveedor }}</td>

                                <td class="text-center">
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#edit{{ $product->id_product }}">Editar</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#delete{{ $product->id_product }}">Eliminar</button>
                                </td>
                            </tr>
                            @include('Product.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('Product.create')
        </div>
        <div class="col-md-1"></div> <!-- Columna vacía para espacio -->
    </div>
@endsection
