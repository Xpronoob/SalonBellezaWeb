<x-main-layout>

    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">Nuevo Servicio</strong></p>
                <p class="text-muted">Puedes agregar nuevos servicios.</p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
                <form action="{{ route('servicios.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">

                        <label for="title">Título del Servicio</label>
                        <input type="text" class="form-control" name="title" id="title"
                            placeholder="Ingrese el título del servicio" value="{{ old('title') }}">
                        @error('title')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" name="description" id="description" rows="4"
                            placeholder="Ingrese la descripción del servicio" value="{{ old('description') }}"></textarea>
                        @error('description')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">

                        <label for="image">Subir imagen</label>
                        <input type="file" class="form-control" name="image" id="image"
                            placeholder="Ingrese la URL de la imagen" value="{{ old('image') }}">
                        @error('image')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- comment --}}



                    <div class="modal-footer">
                        <a href="{{ route('servicios.index') }}"><button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Volver</button></a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-main-layout>
