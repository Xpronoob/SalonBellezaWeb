<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('proveedores.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- Cuerpo del Modal: -->
                <div class="modal-body">

                    <!-- Input Nombre del Proveedor -->
                    <div class="mb-3">
                        <label for="provider_name" class="form-label">Nombre del Proveedor</label>
                        <input type="text" class="form-control" name="provider_name" id="provider_name"
                            aria-describedby="providerNameHelp" placeholder="Ingrese el nombre del proveedor" />
                        @error('provider_name')
                            hola
                        @enderror

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <script>
                            $(document).ready(function() {
                                // Verifica si la URL contiene el identificador del modal
                                if (window.location.hash === '#create') {
                                    // Si se encuentra el identificador del modal, abre el modal
                                    $('#create').modal('show');
                                }
                            });
                        </script>

                    </div>

                    <!-- Input Número de Contacto -->
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Número de Contacto</label>
                        <input type="tel" class="form-control" name="contact_number" id="contact_number"
                            aria-describedby="contactNumberHelp" placeholder="Ingrese el número de contacto" />
                    </div>

                    <!-- Input Correo Electrónico -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email" id="email"
                            aria-describedby="emailHelp" placeholder="Ingrese el correo electrónico" />
                    </div>

                    <!-- Input Dirección -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="address" id="address"
                            aria-describedby="addressHelp" placeholder="Ingrese la dirección" />
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
