<x-public-layout>
    <div class="container-fluid page__heading-container">
        <div class="page__heading">

            <h1 class="m-0">Editar cita</h1>
        </div>
    </div>

    <div class="container-fluid page__container">

    </div>

    <div class="card card-form">
        <div class="row no-gutters">

            <div class="col-lg-12 card-form__body card-body">

                <div class="form-group">

                    <label for="validationSample01">Nombre del cliente</label>
                    <input type="text" class="form-control" id="validationSample01" placeholder="Nombre "
                        value="Mario" required="">


                </div>
                <div class="form-group">
                    <label for="select03">Servicios a agendar:</label>
                    <select id="select03" data-toggle="select" multiple class="form-control">
                        <option selected="">Peinados</option>
                        <option selected="">Maquillaje</option>
                        <option>Coloración</option>
                        <option>Pedicure</option>
                    </select>
                </div>
                <div class="form-group">

                    <label for="select02">Estilistas diponibles</label>
                    <select id="select02" data-toggle="select" data-minimum-results-for-search="-1"
                        class="form-control">
                        <option data-avatar-src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg">
                            Adelle Sherley
                        </option>
                        <option data-avatar-src="assets/images/avatar/demi.png">
                            Adrian Demian
                        </option>
                        <option data-avatar-src="assets/images/avatar/green.svg">
                            Green Doe
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="select04">Fechas disponibles</label>
                    <select id="select04" data-toggle="select" multiple class="form-control form-control-lg">
                        <option selected="">12/2/24 8:30pm </option>
                        <option>14/2/24 10:20am</option>
                        <option>16/2/24 7:30pm</option>
                        <option>18/2/24 6:00pm</option>


                    </select>
                </div>

            </div>

        </div>
        <button type="button" class="btn btn-primary">Agendar cita</button>

    </div>



    </div>

    <!-- // END drawer-layout__content -->

</x-public-layout>
