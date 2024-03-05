<!-- Modal PARA EDITAR-->
<div class="modal fade" id="edit{{ $service->id_service }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('servicios.update', $service->id_service) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Cuerpo del Modal: -->
                <div class="modal-body">

                    <!-- Input Título del Servicio -->
                    <div class="mb-3">
                        <label for="service_title" class="form-label">Título del Servicio</label>
                        <input type="text" class="form-control" name="service_title" id="service_title" aria-describedby="serviceTitleHelp" placeholder="Ingrese el título del servicio" value="{{ $service->service_title }}">
                    </div>

                    <!-- Input Descripción -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" name="description" id="description" aria-describedby="descriptionHelp" placeholder="Ingrese la descripción del servicio">{{ $service->description }}</textarea>
                    </div>

                    <!-- Input URL de la Imagen -->
                    <div class="mb-3">
                        <label for="image_url" class="form-label">URL de la Imagen</label>
                        <input type="text" class="form-control" name="image_url" id="image_url" aria-describedby="imageUrlHelp" placeholder="Ingrese la URL de la imagen" value="{{ $service->image_url }}">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar Servicio</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de borrar -->
<div class="modal fade" id="delete{{ $service->id_service }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('servicios.destroy', $service->id_service) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <!-- Cuerpo del Modal: -->
                <div class="modal-body">
                    ¿Estás seguro que deseas eliminar el servicio: <strong>{{ $service->service_title }}</strong>?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
