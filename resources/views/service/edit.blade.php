<x-main-layout>

    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">Editar Servicio</strong></p>
                <p class="text-muted">Puedes editar la información de los servicios.</p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
                <form action="{{ route('servicios.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Título del Servicio</label>
                        <input type="text" class="form-control" for="title" name="title" id="title"
                            placeholder="Ingrese el título del servicio" value="{{ $service->title }}">
                        @error('title')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input for="description" type="text" class="form-control" name="description" id="description"
                            placeholder="Ingrese la descripción del servicio" value="{{ $service->description }}">
                        @error('description')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">URL de la Imagen</label>
                        <input type="file" class="form-control" name="image" id="image"
                            placeholder="Ingrese la URL de la imagen">
                        @error('image')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                        @if ($service->image)
                            <div class="form-group">
                                <label class="mt-2">Imagen Actual</label><br>
                                <img style="max-width: 350px" src="{{ $service->image }}" alt="Imagen Actual">
                            </div>
                        @endif
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
</x-main-layout>
