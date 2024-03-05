<!DOCTYPE html>
<html lang="en">

@extends('categoria')
@section('content')

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <br>
                    <div class="pull-left">
                        <h2>Editar Categoria</h2>
                    </div>

                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('category.update', $category->id_category) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <br>
                            <strong>Nombre de la categoria:</strong>
                            <input type="text" name="category_name" value="{{ $category->category_name }}"
                                class="form-control" placeholder="Ingrese el nombre de la categoria">
                            @error('category_name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 margin-tb">
                        <br>
                        <div class="pull-right">
                            <a class="btn btn-danger text-white" href="{{ route('category.index') }}"
                                enctype="multipart/form-data">
                                Cancelar</a>
                            <button type="submit" class="btn btn-info  text-white ml-3">Confirmar</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>

    </html>
@endsection
