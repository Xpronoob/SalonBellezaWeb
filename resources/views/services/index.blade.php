<x-main-layout>
    <a href="{{ route('servicios.create') }}" class="btn btn-success mb-1">Nuevo</a>
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-12 card-form__body">

                <div class="table-responsive border-bottom" data-toggle="lists"
                    data-lists-values='["js-lists-values-employee-name"]'>

                    <div class="search-form search-form--light m-3">
                        <input type="text" class="form-control search" placeholder="Search">
                        <button class="btn" type="button"><i class="material-icons">search</i></button>
                    </div>

                    <table class="table mb-0 thead-border-top-0">
                        <thead>
                            <tr>

                                <th>Título</th>

                                {{-- <th style="width: 37px;">Título</th> --}}
                                <th style="width: 120px;">Descripción</th>
                                <th style="width: 51px;">URL Imagen</th>
                                <th style="width: 24px;">Editar</th>
                                <th style="width: 24px;">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="staff02">
                            @foreach ($services as $service)
                                <tr>

                                    <td>

                                        <span class="js-lists-values-employee-name">{{ $service->title }}</span>

                                    </td>

                                    <td><span class="badge badge-warning">{{ $service->description }}</span></td>
                                    <td><small class="text-muted">{{ $service->image_url }}</small></td>
                                    <td><a href="{{ route('servicios.edit', $service->id) }}">✏️</a></td>
                                    <td>
                                        <form method="POST" action="{{ route('servicios.destroy', $service->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">🗑️</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-main-layout>
