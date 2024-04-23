<x-main-layout>
    <form action="{{ route('contabilidad.update', $accounting->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-4 card-body">
                    <p><strong class="headings-color">Editar Registros</strong></p>
                    <p class="text-muted">Puedes editar la información de los proveedores.</p>
                </div>
                <div class="col-lg-8 card-form__body card-body">
                    <form>
                        <div class="form-group">
                            <label for="movement_description">Descripcion del movimiento</label>
                            <input type="text" class="form-control" for="movement_description"
                                name="movement_description" id="movement_description"
                                placeholder="Ingrese la descripción del movimiento"
                                value="{{ $accounting->movement_description }}">
                            @error('movement_description')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="amount">Cantidad:</label>
                            <input type="number" class="form-control" for="amount" name="amount" id="amount"
                                placeholder="Ingrese la cantidad" value="{{ $accounting->amount }}">
                            @error('amount')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="movement_date">Fecha</label>
                            <input type="datetime-local" class="form-control" for="movement_date" name="movement_date"
                                id="movement_date" placeholder="Ingrese la fecha"
                                value="{{ $accounting->movement_date }}">
                            @error('movement_date')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="movement_type">Tipo de movimiento:</label>
                            <select class="form-control" id="movement_type" name="movement_type">
                                <option value="Sinpe móvil" @if($accounting->movement_type == "Sinpe móvil") selected @endif>Sinpe móvil</option>
                                <option value="Transferencia bancaria" @if($accounting->movement_type == "Transferencia bancaria") selected @endif>Transferencia bancaria</option>
                                <option value="Efectivo" @if($accounting->movement_type == "Efectivo") selected @endif>Efectivo</option>
                            </select>
                            @error('movement_type')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="transaction_type">Tipo de transacción:</label>
                            <select class="form-control" id="transaction_type" name="transaction_type">
                                <option value="Ingreso" @if($accounting->transaction_type == "Ingreso") selected @endif>Ingreso</option>
                                <option value="Gasto" @if($accounting->transaction_type == "Gasto") selected @endif>Gasto</option>
                            </select>
                            @error('transaction_type')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pending_balance">Saldo pendiente:</label>
                            <input type="number" class="form-control" for="pending_balance" name="pending_balance"
                                id="pending_balance" placeholder="Ingrese el saldo pendiente"
                                value="{{ $accounting->pending_balance }}">
                            @error('pending_balance')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="modal-footer">
                            <a href="{{ route('contabilidad.index') }}"><button type="button"
                                    class="btn btn-secondary" data-dismiss="modal">Volver</button></a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</x-main-layout>
