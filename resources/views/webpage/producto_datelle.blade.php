<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SkyairWin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{!! asset('WebPage/assets/img/favicon.png') !!}" rel="icon">
    <link href="{!! asset('WebPage/assets/img/apple-touch-icon.png') !!}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{!! asset('WebPage/assets/vendor/aos/aos.css') !!}" rel="stylesheet">
    <link href="{!! asset('WebPage/assets/vendor/bootstrap/css/bootstrap.css') !!}" rel="stylesheet">
    <link href="{!! asset('WebPage/assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}" rel="stylesheet">
    <link href="{!! asset('WebPage/assets/vendor/glightbox/css/glightbox.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('WebPage/assets/vendor/swiper/swiper-bundle.min.css') !!}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- Template Main CSS File -->
    <link href="{!! asset('WebPage/assets/css/style.css') !!}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: TheEvent - v4.9.1
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center ">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
                <a href="index.html" class="scrollto"><img src="{!! asset('WebPage/assets/img/logo.png') !!}" alt=""
                        title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Paquetes Turisticos</a></li>
                    <li><a class="nav-link scrollto" target="_blank" href="https://rentacarpasto.com/">Alquiler de
                            autos</a></li>
                    <li><a class="nav-link scrollto" href="#speakers">Ofertas</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Información</a></li>
                    <li><a class="nav-link scrollto" href="#schedule">Sobre Nosotros</a></li>
                    <li><a class="nav-link scrollto" href="#faq">Preguntas</a></li>

                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a class="buy-tickets scrollto" href="#about">Vuelos Charter</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->


    <main id="main">




        <section id="speakers-details">
            <div class="container pt-5">
                <div class="section-header">
                    <h2>{{ $destino->Nombre_paquete }}</h2>
                    <p>El paquete ideal</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('/storage/destinos/', $destino->Imagen) }}" class=" img-fluid">
                    </div>

                    <div class="col-md-6">
                        <div class="details">
                            <h2>{{ $destino->Ciudad }}</h2>

                            <p>{{ $destino->Resena }}</p>

                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalLong" onclick="abrir_modal()">
                                Quiero el paquete
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </section>


    </main><!-- End #main -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cotizar Paquete</h5>
     
      </div>
      <div class="modal-body">
      <form method="POST" action="{{route('Ventas_post')}}" >
@csrf
      <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" name="Nombre" id="Nombre"
                                        aria-describedby="emailHelp" placeholder="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Correo</label>
                                    <input type="text" class="form-control" name="Correo" id="Correo"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Telefono</label>
                                    <input type="number" class="form-control" name="Telefono" id="Telefono"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Anotacion</label>
                                    <input type="text" class="form-control" name="Anotacion" id="Anotacion"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="text-center text-azul">Lugar de Origen</label>
                                <select class="form-select" aria-label="Default select example" name="origen">
                                    <option selected>Seleccione lugar de origen</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                            </div>
                            <div class="col-md-6"><label for="exampleInputPassword1">Lugar de Destino</label>
                                <input type="text" class="form-control" name="Destino" id="Destino"
                                    placeholder="" value="{{ $destino->Ciudad }}" readonly>
                            </div>
                            <div class="col-md-12">
                            <label class="text-center text-azul">Fecha</label><br>
            <input type="text" class="form-control" name="dates" value="Seleccione fechas" />
                            </div>
                        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrar_modal()">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar Cotización</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="{!! asset('WebPage/assets/img/logo.png') !!}" alt="TheEvenet">
                        <p>Cuando nos permites guiarte para que tomes la mejor opción para tus vacaciones, entonces
                            nosotros estamos a tu entera disposición para que te mantengas contento de comienzo a fin en
                            tu paseo. Nos convertimos en tu aliado, en tu cómplice, en tu compañero de diversión, porque
                            te apoyamos con lo mejor que tenemos.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Inicio</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#gallery">Paquetes Turisticos</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a target="_blank"
                                    href="https://rentacarpasto.com/">Alquiler de autos</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#speakers">Ofertas</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#contact">Información</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#schedule">Sobre Nosotros</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#faq">Preguntas</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">Vuelos Charter</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terminos y condiciones</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Politicas</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contacto</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br>
                            <strong>Telefono:</strong> +57 322 950 2225<br>
                            <strong>Email:</strong>info@skywinair.co<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100063900969696&eid=ARDdcby2fQfUUytcsfzY7N18NNaVOqgJH-r998Nbrlq3Eh5civMr6myLDHv1yG-x9CazhqbMrcsRTosp"
                                class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/skywin_air/?hl=es-la" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
                Designed by <a href="https://bootstrapmade.com/">Hache</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{!! asset('WebPage/assets/vendor/aos/aos.js') !!}"></script>
    <script src="{!! asset('WebPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('WebPage/assets/vendor/glightbox/js/glightbox.min.js') !!}"></script>
    <script src="{!! asset('WebPage/assets/vendor/swiper/swiper-bundle.min.js') !!}"></script>
    <script src="{!! asset('WebPage/assets/vendor/php-email-form/validate.js') !!}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{!! asset('WebPage/assets/js/main.js') !!}"></script>
    <script src="{!! asset('WebPage/assets/js/myscript.js') !!}"></script>
</body>

</html>
