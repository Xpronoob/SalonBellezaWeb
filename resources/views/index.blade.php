<x-main-layout>




    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>

    <body>
        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="check2" viewBox="0 0 16 16">
                <path
                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
            </symbol>
            <symbol id="circle-half" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
            </symbol>
            <symbol id="moon-stars-fill" viewBox="0 0 16 16">
                <path
                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                <path
                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
            </symbol>
            <symbol id="sun-fill" viewBox="0 0 16 16">
                <path
                    d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
            </symbol>
        </svg>




        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" />
                <path
                    d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
            </symbol>
            <symbol id="cart" viewBox="0 0 16 16">
                <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
            <symbol id="chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </symbol>
        </svg>


        <main class="container">

            <div class="jumbotron jumbotron-fluid bg-light">
    <div class="container">
        <h1 class="display-4 text-primary">¡Bienvenido a Utopia Salon!</h1>
        <p class="lead">Somos un salón dedicado a brindarte los mejores servicios para que te sientas y luzcas genial.</p>
        <p class="lead">Nuestro compromiso es ofrecerte una experiencia excepcional en cada visita.</p>
    </div>
</div>


<div class="row mb-4">
    <div class="col-md-6">
        <div class="card border rounded h-100">
            <div class="card-body">
                <h5 class="card-title text-success-emphasis">Inventario</h5>
                <h3 class="card-subtitle mb-3">Gestiona tus productos ahora</h3>
                <p class="card-text">Aquí puedes administrar todos los productos disponibles en nuestro salón de belleza de manera eficiente y conveniente.</p>
                <a href='productos' class="btn btn-primary">Ir a Inventario</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card border rounded h-100">
            <div class="card-body">
                <h5 class="card-title text-success-emphasis">Proveedores</h5>
                <h3 class="card-subtitle mb-3">Gestiona tus proveedores</h3>
                <p class="card-text">Aquí puedes administrar todos los proveedores disponibles y puedes agregar o eliminar.</p>
                <a href="proveedores" class="btn btn-primary">Ir a Proveedores</a>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-6">
        <div class="card border rounded h-100">
            <div class="card-body">
                <h5 class="card-title text-success-emphasis">Servicios</h5>
                <h3 class="card-subtitle mb-3">Gestiona tus servicios</h3>
                <p class="card-text">Aquí puedes administrar todos los servicios disponibles en nuestro salón de belleza de manera eficiente y conveniente.</p>
                <a href="servicios" class="btn btn-primary">Ir a Servicios</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card border rounded h-100">
            <div class="card-body">
                <h5 class="card-title text-success-emphasis">Citas</h5>
                <h3 class="card-subtitle mb-3">Gestiona tus citas</h3>
                <p class="card-text">Aquí puedes administrar todas las citas disponibles en nuestro salón de belleza de manera eficiente y conveniente.</p>
                <a href="citas" class="btn btn-primary">Ir a Citas</a>
            </div>
        </div>
    </div>
</div>



            <br>
            <div class="row g-5 mb-4">
    <div class="col-md-8">
        <article class="card border rounded shadow-sm">
            <div class="card-body">
              
                <p class="text-center">En la página web de nuestro salón, te sumergirás en un oasis de belleza y bienestar. Desde el momento en que llegas, serás recibido con un diseño elegante y una navegación intuitiva que te guiará a través de nuestros servicios excepcionales. Explora una amplia gama de tratamientos capilares, desde cortes de vanguardia hasta colores vibrantes, diseñados para realzar tu belleza única. Nuestro equipo de expertos estilistas y esteticistas está dedicado a brindarte una experiencia personalizada y transformadora, donde cada visita es una oportunidad para rejuvenecer y revitalizar cuerpo y mente. Sumérgete en nuestra galería de imágenes, que captura la esencia de nuestro salón, desde el ambiente acogedor hasta los resultados deslumbrantes. ¡Bienvenido a nuestro mundo de belleza, donde tus sueños de estilo se hacen realidad!</p>
                <hr>
                <p class="text-center">Nuestro salón es un santuario de belleza y bienestar, donde la elegancia se combina con la comodidad para ofrecerte una experiencia inigualable. Desde el momento en que cruzas nuestras puertas, te envuelve una atmósfera de tranquilidad y profesionalismo. Con un equipo de talentosos estilistas y expertos en cuidado personal, estamos dedicados a brindarte servicios excepcionales que resalten tu estilo único y realcen tu confianza. Nuestro compromiso con la excelencia se refleja en cada detalle, desde la calidad de nuestros productos hasta la atención personalizada que recibes en cada visita. En nuestro salón, no solo te transformarás físicamente, sino que también encontrarás un refugio donde recargar energías y revitalizar tu espíritu. ¡Bienvenido a nuestro oasis de belleza, donde tus deseos de estilo se hacen realidad!</p>
            </div>
        </article>
    </div>

    <div class="col-md-4">
        <div class="card position-sticky top-2rem">
            <div class="card-body bg-body-tertiary rounded shadow-sm">
                <h4 class="card-title fst-italic">Sobre Nosotros</h4>
                <p class="card-text">Sala de Belleza, expertos en color y tratamientos especializados para el cabello.</p>
            </div>
        </div>
        <div class="card position-sticky top-2rem">
            <div class="card-body bg-body-tertiary rounded shadow-sm">
                <h4 class="card-title fst-italic">Dirección</h4>
                <p class="card-text">San José, Desamparados, Costa Rica</p>
            </div>
        </div>
        <div class="card position-sticky top-2rem">
            <div class="card-body bg-body-tertiary rounded shadow-sm">
                <h4 class="card-title fst-italic">Horarios</h4>
                <p class="card-text">Lunes 10:00 a.m. - 6:00 p.m.</p>
                <p class="card-text">Martes 10:00 a.m. - 6:00 p.m.</p>
                <p class="card-text">Miércoles 10:00 a.m. - 6:00 p.m.</p>
                <p class="card-text">Jueves 10:00 a.m. - 6:00 p.m.</p>
                <p class="card-text">Viernes 10:00 a.m. - 6:00 p.m.</p>
                <p class="card-text">Sábado 10:00 a.m. - 6:00 p.m.</p>
                <p class="card-text">Domingo CERRADO</p>
            </div>
        </div>
    </div>
</div>


        </main>

    </body>


</x-main-layout>
