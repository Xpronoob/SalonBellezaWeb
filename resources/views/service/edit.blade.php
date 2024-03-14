<x-main-layout>
    <form action="{{ route('servicios.update', $service->id_service) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-4 card-body">
                    <p><strong class="headings-color">Editar Servicio</strong></p>
                    <p class="text-muted">Puedes editar la información de los servicios.</p>
                </div>
                <div class="col-lg-8 card-form__body card-body">
                    <form>
                   
                        <div class="form-group">
                      <label for="service_title" >Título del Servicio</label>
                      <input type="text" class="form-control" name="service_title" id="service_title"
                       placeholder="Ingrese el título del servicio" value="{{ $service->ervice_title}}">
                      @error('service_title')
                          <div style="color: red;">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="description" >Descripción</label>
                      <input type="text" class="form-control" name="description" id="description" 
                          placeholder="Ingrese la descripción del servicio" value="{{ $service->description}}">
                      @error('description')
                          <div style="color: red;">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="image_url">URL de la Imagen</label>
                      <input type="text" class="form-control" name="image_url" id="image_url"
                          placeholder="Ingrese la URL de la imagen" value="{{ $service->image_url}}">
                      @error('image_url')
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
