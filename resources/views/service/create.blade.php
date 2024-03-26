<x-main-layout>
    <form action="{{ route('servicios.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-4 card-body">
                    <p><strong class="headings-color">Nuevo Servicio</strong></p>
                    <p class="text-muted">Puedes agregar nuevos servicios.</p>
                </div>
                <div class="col-lg-8 card-form__body card-body">
                    <form>
                        <div class="form-group">

                            <label for="title">Título del Servicio</label>
                            <input for="title" type="text" class="form-control" name="title" id="title"
                                placeholder="Ingrese el título del servicio">
                            @error('title')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input for="description" type="text" class="form-control" name="description"
                                id="description" placeholder="Ingrese la descripción del servicio">
                            @error('description')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">URL de la Imagen</label>
                            <input type="text" class="form-control" for="image" name="image" id="image_url"
                                placeholder="Ingrese la URL de la imagen">
                            @error('image')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="modal-footer">
                            <a href="{{ route('servicios.index') }}"><button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Volver</button></a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</x-main-layout>
