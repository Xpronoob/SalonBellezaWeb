<x-main-layout>
    <form action="{{ route('contabilidad.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-4 card-body">
                    <p><strong class="headings-color">Ingresar datos</strong></p>
                    <p class="text-muted">Puedes agregar todos los datos de la contabilidad para tener registrados las transcacciones</p>
                </div>
                <div class="col-lg-8 card-form__body card-body">
                    <form>
                        <div class="form-group">
                            <label for="movement_description">Descripcion del movimiento</label>
                            <input type="text" class="form-control" for="movement_description" name="movement_description" id="movement_description"
                                placeholder="Ingrese la descripción del movimiento" value="{{ old('movement_description') }}">
                            @error('movement_description')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="amount">Cantidad:</label>
                            <input type="number" class="form-control" for="amount" name="amount" id="amount"
                                placeholder="Ingrese la cantidad" value="{{ old('amount') }}">
                            @error('amount')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="movement_date">Fecha</label>
                            <input type="date" class="form-control" for="movement_date" name="movement_date" id="movement_date"
                                placeholder="Ingrese la fecha" value="{{ old('movement_date') }}">
                            @error('movement_date')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="movement_type">Tipo de movimiento:</label>
                            <input type="text" class="form-control" for="movement_type" name="movement_type" id="movement_type"
                                placeholder="Ingrese el tipo de movimiento" value="{{ old('movement_type') }}">
                            @error('movement_type')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="transaction_type">Tipo de transacción:</label>
                            <input type="text" class="form-control" for="transaction_type" name="transaction_type" id="transaction_type"
                                placeholder="Ingrese el tipo de transacción" value="{{ old('transaction_type') }}">
                            @error('transaction_type')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pending_balance">Saldo pendiente:</label>
                            <input type="number" class="form-control" for="pending_balance" name="pending_balance" id="pending_balance"
                                placeholder="Ingrese el saldo pendiente" value="{{ old('pending_balance') }}">
                            @error('pending_balance')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('contabilidad.index') }}"><button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Volver</button></a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</x-main-layout>
