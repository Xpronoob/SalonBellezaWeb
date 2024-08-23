<x-main-layout>
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-8">
                <div class="card-form__body card-body">
                    <form action="{{ route('citas.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <!--
                                <div class="form-group">
                                    <label for="location">Localización de la cita</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Ingrese la locación de la cita" value="{{ old('location') }}">
                                    @error('location')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div> -->

                                <div class="form-group">
    <label for="location">Localización de la cita</label>
    <select class="form-control" id="location" name="location">
        <option value="">Seleccione la locación </option>
        <option value="Sede desamparados"> Sede desamparados</option>
        <option value="Sede San Pedro"> Sede San Pedro</option>
    </select>
    @error('location')
        <div style="color: red;">{{ $message }}</div>
    @enderror
</div>

                                <div class="form-group">
                                    <label for="description">Descripción del Producto</label>
                                    <input class="form-control" id="description" name="description" rows="3" placeholder="Ingrese la descripción del cita" value="{{ old('description') }}">
                                    @error('description')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                <label for="appointment_date">Fecha y hora</label>
                                    <input type="datetime-local" class="form-control" for="appointment_date" name="appointment_date" id="appointment_date"
                                         placeholder="Ingrese la fecha y la hora" value="{{ old('appointment_date') }}">
                                     @error('appointment_date')
                                     <div style="color: red;">{{ $message }}</div>
                                   @enderror
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stylist">Nombre de la estilista</label>
                                    <input type="text" class="form-control" id="stylist" name="stylist" placeholder="Ingrese el nombre" value="{{ old('stylist') }}">
                                    @error('stylist')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
    <label for="usuario">Correo del cliente</label>
    <select name="id_user" id="id_user" class="form-control">
        <option value=""> --Seleccione un Correo--</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}" {{ old('id_user') == $user->id ? 'selected' : '' }}>
            #{{ $user->id }} - {{ $user->email }} | {{ $user->name }}
            </option>
        @endforeach
    </select>
    @error('id_user')
        <div style="color: red;">{{ $message }}</div>
    @enderror
</div>



                                <div class="form-group">
                                    <label for="description">Descripcion de la cita</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Ingrese la descripción de la cita" value="{{ old('description') }}">
                                    @error('description')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="cost">Costo de la cita</label>
                                    <input type="text" class="form-control" id="cost" name="cost" placeholder="Ingrese el costo" value="{{ old('cost') }}">
                                    @error('cost')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="{{ route('citas.index') }}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button></a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">Nueva Cita</strong></p>
                <p class="text-muted">Puedes agregar nuevos citas para llevar un mejor control.</p>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Inicializar Select2 para el selector de categoría
            $('#id_user').select2({
                placeholder: '--Seleccione una categoría--',
                allowClear: true, // Opcional: permite borrar la selección
                language: {
                    noResults: function() {
                        return "No se encontraron resultados de esa categoría";
                    }
                }
            });
        });
    </script>   

</x-main-layout>
