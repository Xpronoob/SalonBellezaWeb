<!-- Modal de borrar -->
<div class="modal fade" id="delete{{ $category->id_category }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('category.destroy', $category->id_category) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <!-- Cuerpo del Modal: -->
                <div class="modal-body">
                    Estás seguro que quieres eliminar a: <strong> {{ $category->category_name }} ?</strong>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
