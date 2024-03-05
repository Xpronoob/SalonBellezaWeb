<x-main-layout>
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
                                <th style="width: 51px;">Activo</th>
                                <th style="width: 24px;">Acciones</th>
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
                                    <td>✅</td>
                                    <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a>
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
