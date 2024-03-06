@extends('categoria')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"> <br><br>

            <!-- Button trigger modal -->


            <button type="button" class="btn btn-primary">
                <a href="{{ route('category.create') }}" class="text-white ">Nueva Categoria</a>

            </button>


            <br><br>


            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>

                            <th scope="col">Nombre Categoria</th>
                            <th class="text-center" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse  ($categories as $category)
                            <tr class="">
                                <td scope="row">{{ $category->id_category }}</td>
                                <td>{{ $category->category_name }}</td>

                                <td class="text-center">

                                    <a class="btn btn-success"
                                        href="{{ route('category.edit', $category->id_category) }}">Editar</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#delete{{ $category->id_category }}">Eliminar</button>
                                </td>

                            </tr>
                            @include('category.delete')
                        @empty
                            <tr class="bg-red-400 text-white text-center">
                                <td colspan="3" class="border px-4 py-2">{{ __('No hay categorias para mostrar') }}</td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
