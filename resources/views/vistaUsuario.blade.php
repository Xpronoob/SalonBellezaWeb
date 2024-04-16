<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Utopía Beauty Salón | Web Site</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/assetsUser/img/123.png') }}" rel="icon">
    <link href="{{ asset('assets/assetsUser/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/assetsUser/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assetsUser/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assetsUser/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assetsUser/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assetsUser/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assetsUser/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assetsUser/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/assetsUser/css/style.css') }}" rel="stylesheet">

</head>

<body>



    <!-- ======= Header ======= -->

    <header id="header" class="fixed-top">

        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Utopía Beauty Salón</a></h1>



            <nav id="navbar" class="navbar">

                <ul>

                    <li><a class="nav-link scrollto active" href="#hero">Principal</a></li>

                    <li><a class="nav-link scrollto" href="#team">Estilistas</a></li>

                    <li><a class="nav-link scrollto" href="#contact">Ubicación</a></li>

                    <li><a class="nav-link scrollto" href="#footer-top">Redes Sociales</a></li>

                    <li class="dropdown">

                        <a href="#faq">

                            <span>FAQ</span> <i class="bi bi-chevron-down"></i>

                        </a>

                        <ul>

                            <li><a href="#footer-newsletter">Trabaja con nosotros</a></li>

                            <li><a href="#why-us">¿Por qué nosotros?</a></li>

                            <li><a href="#contact">Correo Electrónico</a></li>

                            <li><a href="#contact">Telefono - WhatsApp</a></li>

                        </ul>

                    </li>

                    <li class="dropdown">
                        <a class="bi bi-person" href="#" id="profileDropdown">
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <!-- Aquí debería ir el nombre del usuario registrado y poder cerrar sesión -->
                            @auth
                                <p href="{{ route('profile.edit') }}" class="dropdown-item">Hola
                                    {{ Auth::user()->name }}</p>
                                <li><a href="{{ route('profile.edit') }}" class="dropdown-item">Mi Perfil</a></li>
                                <form id="formL" action="{{ route('logout') }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <button class="dropdown-item type="submit">
                                        <a class="dropdown-item">Cerrar Sesión</a>
                                    </button>
                                @else
                                    <a class="" href="{{ route('login') }}">Iniciar Sesión</a>
                                    <a class="" href="{{ route('register') }}">Registrarse</a>

                                @endauth
                            </form>
                        </ul>
                    </li>

                    @role('admin')
                        <li class="dropdown">
                            <a class="bi bi-hdd" href="#" id="profileDropdown">
                                <i class="bi bi-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                <!-- Aquí debería ir el nombre del usuario registrado y poder cerrar sesión -->
                                <li><a href="{{ route('productos.index') }}" class="dropdown-item">Productos</a></li>
                                <li><a href="{{ route('proveedores.index') }}" class="dropdown-item">Proveedores</a></li>
                                <li><a href="{{ route('categorias.index') }}" class="dropdown-item">Categorías</a></li>

                                <li><a href="{{ route('contabilidad.index') }}" class="dropdown-item">Contabilidad</a></li>
                                <li><a href="{{ route('citas.index') }}" class="dropdown-item">Citas</a></li>
                                <li><a href="{{ route('servicios.index') }}" class="dropdown-item">Servicios</a></li>
                            </ul>
                        </li>
                    @endrole


                    <li><a target="_blank" class="getstarted scrollto" href="https://wa.link/u0zt1v">Cotiza un
                            trabajo</a></li>

                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->

        </div>

    </header><!-- End Header -->



    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="background-color: black; color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Utopía Beauty Salón</h1>
                    <h2>Plataforma Web Oficial del Salón de Belleza | Costa Rica</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#contact" class="btn-get-started scrollto">Ubicación | Contacto</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>

                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/assetsUser/img/123.png') }}" class="img-fluid animated"
                        alt="" style="width: 400px; height: auto;">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/assetsUser/img/clients/Cliente7.jpg') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/assetsUser/img/clients/Cliente10.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/assetsUser/img/clients/Cliente3.jpg') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/assetsUser/img/clients/Cliente4.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/assetsUser/img/clients/Cliente5.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/assetsUser/img/clients/Cliente6.png') }}" class="img-fluid"
                            alt="">
                    </div>

                </div>
            </div>
        </section>
        <!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Nosotros:</h2>
                </div>
                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            <strong>Visión:</strong>
                            "Ser reconocidos como el principal destino de belleza en Costa Rica, destacando por nuestro
                            compromiso con la excelencia, la innovación y la satisfacción del cliente. Nos esforzamos
                            por seguir siendo líderes en la industria de la belleza, ofreciendo servicios vanguardistas
                            y utilizando productos de alta calidad. Buscamos expandir nuestra presencia en la comunidad,
                            fortaleciendo las relaciones con nuestros clientes y siendo un referente de integridad y
                            profesionalismo en el mundo de la belleza."
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            <strong>Misión:</strong>
                            "En Utopía Beauty Salón, nuestra misión es resaltar la belleza única de cada persona,
                            ofreciendo servicios de alta calidad y personalizados que reflejen la esencia y estilo de
                            nuestros clientes. Nos comprometemos a proporcionar un ambiente acogedor y profesional,
                            donde la experiencia de belleza sea más que un simple servicio, sino un momento de auténtico
                            cuidado personal."
                        </p>
                        <a href="#" class="btn-learn-more">Contáctanos</a>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->


        <!-- =======  pasar a español: Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>¿Por qué nosotros <strong>somos tu mejor opción?</strong></h3>
                            <p>
                                Nosotros tenemos productos de calidad y trabajamos solo con marcas orginales. Además,
                                ofrecemos horarios y trabajamos en fechas que normalmente no trabajan los demás salones.
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>01</span> Cuál es el horario de Utopía
                                        Beauty Salón?<i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show"
                                        data-bs-parent=".accordion-list">
                                        <p>
                                            El horario de Utopía Beauty Salón es de lunes a Sábado, de 9:00 am a 5:00
                                            pm, y los domingos 10:00 am a 3:00 pm.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> Como puedo sacar una cita para un servicio?
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Para sacar una cita para un servicio, todo se realiza mediante <strong><a
                                                    href="https://wa.link/u0zt1v" target="_blank"
                                                    rel="noopener noreferrer">WhatsApp</a></strong>Contáctanos a través
                                            de WhatsApp y el salón asignará una cita y un horario para ti.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Qué experiencia puedo esperar en Utopía
                                        Beauty Salón? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            En Utopía Beauty Salón, te ofrecemos una experiencia excepcionalmente
                                            relajante y rejuvenecedora.
                                            Nuestro equipo de profesionales altamente capacitados se dedica a
                                            proporcionarte servicios de la más
                                            alta calidad, diseñados para realzar tu belleza natural y mejorar tu
                                            bienestar.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("{{ asset('assets/assetsUser/img/trabajo4.jpg') }}");'
                        data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('assets/assetsUser/img/trabajo1.jpg') }}" class="img-fluid"
                            alt="Servicios del Salón">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3 class="text-center" style="color:black">Nuestros Servicios Más Cotizados</h3>
                        <p class="fst-italic">
                            En Utopía Beauty Salón, nos especializamos en una variedad de servicios diseñados para
                            realzar tu belleza y mejorar tu bienestar.
                        </p>

                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">Coloración de Cabello / Balayage / Keratina <i
                                        class="val">45%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" style="width: 45%;"
                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Manicure / Pedicure / Masajes<i class="val">20%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" style="width: 20%;"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Maquillaje / Capacitaciones<i class="val">15%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" style="width: 15%;"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Corte de Pelo<i class="val">20%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" style="width: 20%;"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->




        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>¡Nuestras Redes Sociales!</h3>
                        <p>En nuestras redes sociales podrás encontrar más información acerca de los servicios, eventos,
                            capacitaciones
                            y todas las actividades que realizamos, somos uno de los pocos salones que trabajan con las
                            marcas más reconocidas a nivel nacional.
                        </p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#footer">Visitar</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->



        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Profesionales Utopía Beauty Salón</h2>
                    <p>Nuestro equipo en Utopía Beauty Salón está compuesto por profesionales altamente capacitados y
                        dedicados a brindarte la mejor experiencia de belleza y bienestar. Con un enfoque en la
                        excelencia y el liderazgo, estamos comprometidos a proporcionarte un servicio de calidad y
                        satisfacción en cada visita.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/assetsUser/img/team/team-1.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Kaleth Rojas Sánchez</h4>
                                <span>Administrador General</span>
                                <p>Encargado de la gestión general con enfoque en eficiencia y liderazgo. Siendo
                                    excelente en proceso asignado.</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/assetsUser/img/team/team-2.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Alejandra Sánchez Arias</h4>
                                <span>Master en Color | CEO</span>
                                <p>Experta en coloración. Su pasión es crear experiencias únicas con colores asombrosos.
                                </p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/assetsUser/img/team/team-3.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Anthonny Rojas Sánchez</h4>
                                <span>Técnico de Informática | Publicidad RRSS</span>
                                <p>Apasionado técnico de informática y experto en publicidad en redes sociales</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/assetsUser/img/team/team-4.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Maria José Sánchez</h4>
                                <span>Encargada Peinados, Maquillaje y Masajes</span>
                                <p>Con más de 5 la industria de la belleza, Maria es una apasionada experta en peinados,
                                    maquillaje y masajes.</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Preguntas Frecuentes</h2>
                    <p>
                        Gracias por elegir Utopía Beauty Salón. Queremos hacer tu experiencia lo más fácil y placentera
                        posible, y nuestras Preguntas Frecuentes son una herramienta útil para lograrlo.
                        Si no encuentras la información que necesitas, no dudes en contactarnos directamente a través de
                        nuestra sección de Contacto. Estamos aquí para ayudarte y proporcionarte la asistencia que
                        necesitas.
                    </p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">
                                ¿Cuáles son los servicios que ofrecen en el salón de belleza?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Ofrecemos una amplia gama de servicios de belleza, desde cortes de pelo y peinados,
                                    hasta coloración, tratamientos faciales, manicuras, pedicuras y mucho más. Nuestro
                                    objetivo es realzar tu belleza y hacerte sentir increíble.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">
                                ¿Necesito programar una cita o aceptan clientes sin cita previa?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Recomendamos programar una cita para garantizar que podamos atenderte de manera
                                    eficiente. Sin embargo, también aceptamos clientes sin cita previa, siempre y cuando
                                    haya disponibilidad en el momento.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">
                                ¿Cuánto tiempo de anticipación debo reservar mi cita?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Sugerimos reservar tu cita con al menos una semana de anticipación para asegurar la
                                    disponibilidad deseada. Sin embargo, siempre trataremos de acomodar las citas de
                                    último minuto según la disponibilidad.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">
                                ¿Trabajan con todo tipo de cabello?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Sí, nuestros estilistas son expertos en trabajar con una variedad de tipos de
                                    cabello. Sea cual sea la textura o longitud de tu cabello, estamos aquí para
                                    proporcionar servicios personalizados que se adapten a tus necesidades.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">
                                ¿Puedo traer a mis hijos al salón mientras recibo un servicio?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Apreciamos la tranquilidad en nuestro salón y para garantizar la mejor experiencia
                                    para todos, recomendamos dejar a los niños en casa durante tu visita. Sin embargo,
                                    entendemos que las circunstancias pueden variar, así que no dudes en consultarnos
                                    sobre situaciones especiales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contacto</h2>
                    <p>
                        ¡Estamos encantados de saber de ti! En nuestra sección de contacto, te ofrecemos una vía directa
                        para establecer una conexión con nuestro equipo. Ya sea que tengas preguntas, comentarios, o
                        simplemente quieras decir hola, estamos aquí para escucharte.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <a target="_blank" href="https://acortar.link/OBPGho">
                                    <i class="bi bi-geo-alt"></i>
                                </a>
                                <h4>Dirección:</h4>
                                <p><a target="_blank" href="https://acortar.link/OBPGho">Urb. Dorados Desamparados,
                                        San José</a></p>
                            </div>

                            <div class="email">
                                <a onclick="abrirEmail()"> <i class="bi bi-envelope"> </i></a>
                                <h4>Correo:</h4>
                                <p><a style="color:#5DADE2; cursor: pointer;"
                                        onclick="abrirEmail()">utopiabeautysalon99@gmail.com</a></p>
                            </div>

                            <script>
                                //Funcion para abrir la aplicación por default del dispositivo del usuario.
                                function abrirEmail() {
                                    // Dirección de Correo del colegio:
                                    var destinatario = "utopiabeautysalon99@gmail.com";
                                    var enlaceCorreo = "mailto:" + destinatario;
                                    window.location.href = enlaceCorreo;
                                }
                            </script>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Teléfono:</h4>
                                <p>+506 8918 0032</p>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.395951469245!2d-84.07062492520778!3d9.900942590199495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e34c171c793b%3A0xd93f42824d46b852!2zVXRvcMOtYSBCZWF1dHkgU2Fsw7Nu!5e0!3m2!1ses-419!2scr!4v1713126815113!5m2!1ses-419!2scr"
                                frameborder="0" style="border:0; width: 100%; height: 290px;"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre Completo:</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Correo Electrónico:</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Asunto:</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Descripción mensaje:</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div id="footer-newsletter" class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>¿Te gustaría trabajar con nosotros?</h4>
                        <p>Nos puedes facilitar tu enlace de LinkedIn y nosotros te vamos a contactar en caso de
                            interesarnos tu perfil.</p>
                        <form action="" method="">
                            <input type="email" name="email"><input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer-top" class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Salón Belleza</h3>
                        <p>
                            Desamparados <br>
                            San José, Costa Rica<br>
                            <br>
                            <strong>Teléfono:</strong> +506 8918 0032<br>
                            <strong>Correo:</strong> UtopiaBeauty@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Accesos Rápidos:</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Principal</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Horario</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Ubicación</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Información Extra</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Historia</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Honores</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Políticas</a></li>
                            <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>-->
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Redes Sociales:</h4>
                        <p>En nuestras redes compartimos la experiencia del día a día del salón ¡Echa un vistazo!</p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/profile.php?id=100057254267669" class="facebook"
                                target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/utopia_beauty_salon99?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.tiktok.com/@utopia_beauty_salon?is_from_webapp=1&sender_device=pc"
                                class="tiktok" target="_blank"><i class="bx bxl-tiktok"></i></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>UtopiaBeautySalon</span></strong>. Todos los derechos reservados
            </div>
            <div class="credits">
                Créditos: <a
                    href="https://www.instagram.com/ufidelitas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                    target="_blank">Universidad Fidélitas</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/assetsUser/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/assetsUser/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assetsUser/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/assetsUser/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/assetsUser/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assetsUser/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/assetsUser/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/assetsUser/js/main.js') }}"></script>


</body>

</html>
