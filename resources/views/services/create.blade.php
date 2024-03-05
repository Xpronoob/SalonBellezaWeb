<x-main-layout>
    <div class="card card-form">
        <div class="row no-gutters">

            <div class="col-lg-8 card-form__body card-body">
                <form method="POST" action="{{ route('servicios.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Título:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                        @error('title')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="description">Descripción:</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="Descripción">
                        @error('description')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="image">URL de la imagen:</label>
                        <input type="text" class="form-control" id="image" name="image"
                            placeholder="URL de la imagen">
                        @error('image')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>

            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">Información sobre los servicios</strong></p>
                <p class="text-muted"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur, rem,
                    dolores esse recusandae provident soluta, inventore fugiat quibusdam nemo harum debitis natus culpa.
                    Laborum provident cupiditate saepe maxime atque!.</p>
            </div>
        </div>
    </div>
</x-main-layout>
