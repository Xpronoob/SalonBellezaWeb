
<!DOCTYPE html>
<html lang="en">

@extends('categoria')
@section('content')


<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <br>
                <div class="pull-left mb-2">
                    <h2>Nueva categoria</h2>
                </div>
                
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
               
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <br>
                        <strong>Nombre de la categoria:</strong>
                        <br>
                        <input type="text" name="category_name" class="form-control"
                            placeholder="Ingrese el nombre de la categoria">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div >
                <br>
                <br>
                <div class="pull-right">
                    <a class="btn btn-danger text-white" href="{{ route('category.index') }}"> Cancelar</a>
                    <button type="submit" class="btn btn-info text-white ml-3">Confirmar</button>

                </div>
            </div>
        </form>
    </div>
</body>

</html>

@endsection