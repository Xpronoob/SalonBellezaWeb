
<x-main-layout>
    <form action="{{ route('categorias.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-4 card-body">
                    <p><strong class="headings-color">Nueva Categoria</strong></p>
                    <p class="text-muted">Puedes agregar nuevas categorias</p>
                </div>
                <div class="col-lg-8 card-form__body card-body">
                    <form>
                        <div class="form-group">
                            <label for="category_name">Nombre la categoria:</label>
                            <input type="text" class="form-control" name="category_name" id="category_name"
                                placeholder="Ingrese el nombre de la categoria">
                            @error('category_name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('categorias.index') }}"><button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Volver</button></a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</x-main-layout>