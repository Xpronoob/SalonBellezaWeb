<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Servicio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{ route('servicios.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Cuerpo del Modal: -->
            <div class="modal-body">
               <!-- Input Título del Servicio -->
               <div class="mb-3">
                  <label for="service_title" class="form-label">Título del Servicio</label>
                  <input type="text" class="form-control" name="service_title" id="service_title"
                     aria-describedby="serviceTitleHelp" placeholder="Ingrese el título del servicio" required />
               </div>
               <!-- Input Descripción -->
               <div class="mb-3">
                  <label for="description" class="form-label">Descripción</label>
                  <textarea class="form-control" name="description" id="description"
                     aria-describedby="descriptionHelp" placeholder="Ingrese la descripción del servicio" required></textarea>
               </div>
               <!-- Input URL de la Imagen -->
               <div class="mb-3">
                  <label for="image_url" class="form-label">URL de la Imagen</label>
                  <input type="text" class="form-control" name="image_url" id="image_url"
                     aria-describedby="imageUrlHelp" placeholder="Ingrese la URL de la imagen" required />
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
         </form>
      </div>
   </div>
</div>