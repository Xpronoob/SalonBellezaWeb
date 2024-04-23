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
                        <label for="movement_description">Descripción del movimiento</label>
                        <textarea class="form-control" id="movement_description" name="movement_description" placeholder="Ingrese la descripción del movimiento" rows="3">{{ old('movement_description') }}</textarea>
                        @error('movement_description')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label for="amount">Cantidad:</label>
                            <input type="text" class="form-control" for="amount" name="amount" id="amount"
                                placeholder="Ingrese la cantidad" value="{{ old('amount') }}">
                            @error('amount')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="movement_date">Fecha y hora</label>
                            <input type="datetime-local" class="form-control" for="movement_date" name="movement_date" id="movement_date"
                                placeholder="Ingrese la fecha y la hora" value="{{ old('movement_date') }}">
                            @error('movement_date')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="movement_type">Tipo de movimiento</label>
                            <select class="form-control" id="movement_type" name="movement_type">
                                <option value="" disabled selected>Seleccione Tipo de Movimiento:</option>
                                <option value="Sinpe móvil" @if(old("movement_type") == "Sinpe móvil") selected @endif>Sinpe móvil</option>
                                <option value="Transferencia bancaria" @if(old('movement_type') == "Transferencia bancaria") selected @endif>Transferencia bancaria</option>
                                <option value="Efectivo" @if(old("movement_type") == "Efectivo") selected @endif>Efectivo</option>
                            </select>
                            @error('movement_type')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="transaction_type">Tipo de transacción:</label>
                            <select class="form-control" id="transaction_type" name="transaction_type">
                                <option value="" disabled selected>Seleccione Tipo de Transacción:</option>
                                <option value="Ingreso" @if(old('transaction_type') == "Ingreso") selected @endif>Ingreso</option>
                                <option value="Gasto" @if(old('transaction_type') == "Gasto") selected @endif>Gasto</option>
                            </select>
                            @error('transaction_type')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="starting_amount">Saldo inicial:</label>
                            <input type="text" class="form-control" for="starting_amount" name="starting_amount" id="starting_amount"
                                placeholder="Ingrese el saldo inicial" value="{{ old('starting_amount') }}">
                            @error('starting_amount')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pending_balance">Saldo pendiente:</label>
                            <input type="text" class="form-control" for="pending_balance" name="pending_balance" id="pending_balance"
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
