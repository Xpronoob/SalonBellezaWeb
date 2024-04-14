<x-main-layout>
    <form action="{{ route('proveedores.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-4 card-body">
                    <p><strong class="headings-color">Nuevo Proveedor</strong></p>
                    <p class="text-muted">Puedes agregar nuevos proveedores y vincularlos con los productos que
                        distribuyen
                        para llevar un mejor control.</p>
                </div>
                <div class="col-lg-8 card-form__body card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre del proveedor:</label>
                            <input type="text" class="form-control" for="name" name="name" id="name"
                                placeholder="Ingrese el nombre del proveedor" value="{{ old('name') }}">
                            @error('name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="number">Número de contacto: (Costa Rica)</label>
                            <input type="number" class="form-control" for="number" name="number" id="number"
                                placeholder="+506 Ingrese el número de contacto " value="{{ old('number') }}">
                            @error('number')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico:</label>
                            <input type="text" class="form-control" for="email" name="email" id="email"
                                placeholder="Ingrese el correo electrónico" value="{{ old('email') }}">
                            @error('email')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <input type="text" class="form-control" for="address" name="address" id="address"
                                placeholder="Ingrese la dirección" value="{{ old('address') }}">
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
