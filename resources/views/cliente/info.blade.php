<!-- Modal PARA EDITAR-->
<div class="modal fade" id="edit{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar un Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('home2.update', $cliente->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Cuerpo del Modal: -->
                <div class="modal-body">

                    <!-- Input Nombre -->
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="nombre" value="{{$cliente->nombre}}">
                    </div>

                    <!-- Input Telefono -->
                    <div class="mb-3">
                        <label for="" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="telefono" value="{{$cliente->telefono}}">
                    </div>

                    <!-- Input Correo -->
                    <div class="mb-3">
                        <label for="" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="correo" id="" aria-describedby="helpId" placeholder="correo" value="{{$cliente->correo}}">
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


<!-- Modal de borrar -->
<div class="modal fade" id="delete{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Cliente Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('home2.destroy', $cliente->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <!-- Cuerpo del Modal: -->
                <div class="modal-body">
                    ESTAS SEGURO DE ELIMINAR A <strong> {{$cliente->nombre}} ?</strong>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>