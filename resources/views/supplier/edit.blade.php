<x-main-layout>
    <form action="{{ route('proveedores.update', $supplier->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-4 card-body">
                    <p><strong class="headings-color">Editar Proveedor</strong></p>
                    <p class="text-muted">Puedes editar la información de los proveedores.</p>
                </div>
                <div class="col-lg-8 card-form__body card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre del proveedor:</label>
                            <input type="text" class="form-control" for="name" name="name" id="name"
                                placeholder="Ingrese el nombre del proveedor" value="{{ $supplier->name }}">
                            @error('name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="number">Número de contacto:</label>
                            <input type="text" class="form-control" for="number" name="number" id="number"
                                placeholder="Ingrese el número de contacto" value="{{ $supplier->number }}">
                            @error('number')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico:</label>
                            <input type="text" class="form-control" for="email" name="email" id="email"
                                placeholder="Ingrese el correo electrónico" value="{{ $supplier->email }}">
                            @error('email')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <input type="text" class="form-control" for="address" name="address" id="address"
                                placeholder="Ingrese la dirección" value="{{ $supplier->address }}">
                            @error('address')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('proveedores.index') }}"><button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Volver</button></a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</x-main-layout>
