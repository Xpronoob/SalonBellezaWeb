<x-main-layout>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('deleted'))
        <div class="alert alert-danger">
            {{ session('deleted') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-12 text-center">
        <h1 class="display-6 fw-bold mb-4 p-3 rounded bg-dark text-light">Módulo Proveedores</h1>
    </div>

    <a href="{{ route('proveedores.create') }}"><button type="button" class="btn btn-primary mb-2" data-toggle="modal"
            data-target="#create">
            Nuevo </button></a>

    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-12 card-form__body">
                <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>
                    <form class="d-flex" role="search">
                        <input name="busqueda" class="form-control me-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
                        <button class="btn btn-success" type="submit">Buscar</button>
                    </form>
                    <table class="table mb-0 thead-border-top-0">
                        <thead>
                            <tr>
                                <th>Nombre Proveedor</th>
                                <th>Número Contacto</th>
                                <th>Correo</th>
                                <th>Dirección</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="staff02">
                            @foreach ($suppliers as $supplier)
                                <tr class="">
                                    <td>{{ $supplier->name }}</td>
                                    <td>{{ $supplier->number }}</td>
                                    <td>{{ $supplier->email }}</td>
                                    <td>{{ $supplier->address }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('proveedores.edit', $supplier->id) }}"><button type="button" class="btn btn-success btn-action">Editar</button></a>
                                            <form class="delete-form" action="{{ route('proveedores.destroy', $supplier->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-action">Eliminar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <tr>
            <td colspan=4>{{ $suppliers->appends(['busqueda' => $busqueda]) }} </td>
        </tr>
    </div>
</x-main-layout>
