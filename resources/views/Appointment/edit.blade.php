<x-main-layout>
    <form action="{{ route('citas.update', $appointment->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card card-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 card-body">
                        <p><strong class="headings-color">Editar Cita</strong></p>
                        <p class="text-muted">Puedes editar la información de los citas.</p>
                    </div>
                    <div class="col-md-8 card-form__body card-body">
                    <form>
                   

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="location">Locación de la cita</label>
                                    <input type="text" class="form-control" id="location" name="location" 
                                    placeholder="Ingrese la locación de la cita" value="{{ $appointment-> location}}">
                                    @error('location')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Descripción del Producto</label>
                                    <input class="form-control" id="description" name="description" rows="3" 
                                    placeholder="Ingrese la descripción del cita" value="{{ $appointment-> description }}">
                                    @error('description')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                <label for="appointment_date">Fecha y hora</label>
                                    <input type="datetime-local" class="form-control" for="appointment_date" name="appointment_date" id="appointment_date"
                                         placeholder="Ingrese la fecha y la hora" value="{{ $appointment-> appointment_date }}">
                                     @error('appointment_date')
                                     <div style="color: red;">{{ $message }}</div>
                                   @enderror
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stylist">Nombre de la estilista</label>
                                    <input type="text" class="form-control" id="stylist" name="stylist" 
                                    placeholder="Ingrese el nombre" value="{{ $appointment->stylist  }}">
                                    @error('stylist')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Descripcion de la cita</label>
                                    <input type="text" class="form-control" id="description" name="description" 
                                    placeholder="Ingrese la descripción de la cita" value="{{ $appointment->description }}">
                                    @error('description')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="cost">Costo de la cita</label>
                                    <input type="text" class="form-control" id="cost" name="cost" 
                                    placeholder="Ingrese el costo" value="{{ $appointment->cost }}">
                                    @error('cost')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-group modal-footer">
                            <a href="{{ route('citas.index') }}">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                            </a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-main-layout>
