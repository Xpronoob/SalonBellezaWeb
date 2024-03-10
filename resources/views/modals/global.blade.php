<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Danger Alert Modal -->
<div id="modal-danger" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content bg-danger">
            <div class="modal-body text-center p-4">
                <i class="material-icons icon-40pt text-white mb-2">report_problem</i>
                <h4 class="text-white">Cuidado!</h4>
                <p class="text-white mt-3">Estás intentando eliminar un elemento de la lista, ¿Seguro que deseas
                    continuar?, esta acción no se puede revertir</p>
                <button id="backDeleteButton" type="button" class="btn btn-light my-2"
                    data-dismiss="modal">Volver</button>
                <button id="confirmDeleteButton" type="button" class="btn btn-light my-2"
                    data-dismiss="modal">Eliminar</button>
            </div> <!-- // END .modal-body -->
        </div> <!-- // END .modal-content -->
    </div> <!-- // END .modal-dialog -->
</div> <!-- // END .modal -->

<script>
    $(document).ready(function() {
        // Maneja el clic en el botón de confirmación del modal
        $('#confirmDeleteButton').click(function() {
            // Envía el formulario para ejecutar la solicitud DELETE
            $('#deleteForm').submit();
        });
    });
</script>
