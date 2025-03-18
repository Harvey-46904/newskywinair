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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
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
        <a href="index.html" class="scrollto"><img src="{!! asset('WebPage/assets/img/logo.png') !!}" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Paquetes Turisticos</a></li>
          <li><a class="nav-link scrollto" target="_blank" href="https://rentacarpasto.com/">Alquiler de autos</a></li>
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
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0 text-azul">El cielo y el<br><span>Mundo</span> A tu alcance</h1>
      <!--  <p class="mb-4 pb-0 text-black">
        Navega seguro por los cielos de todo el planeta, nada te detiene con SkyWin Airlines, sueña con tu vuelo, nosotros te elevamos a la cumbre de tus anhelos.
      </p>-->
      <!--  <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>-->
      <a href="#about" class="about-btn scrollto">Vuelos Charter</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

  @yield('producto')
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" class="text-center">¡Encontramos una oferta para ti¡ </h5>
       
      </div>
      <div class="modal-body">
      <p>Uno de nuestros asesores se comunicará con ud para que disfrute de esta oportunidad</p>
      <form method="POST" action="{{route('Charter_post')}}" >
@csrf
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Nombre</label>
                                          <input type="text" class="form-control" name="Nombre" id="Nombre" aria-describedby="emailHelp" placeholder="">
                                         
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Correo</label>
                                          <input type="text" class="form-control" name="Correo" id="Correo" placeholder="">
                                        </div>
                                        <div class="form-group">
                                        <label for="exampleInputPassword1">Telefono</label>
                                          <input type="number" class="form-control" name="Telefono" id="Telefono" placeholder="">
                                        </div>
                                        <div class="form-group">
                                        <label for="exampleInputPassword1">Anotacion</label>
                                          <input type="text" class="form-control" name="Anotacion" id="Anotacion" placeholder="">
                                        </div>
                                  
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary text-center">Enviar Información</button>
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrar_modal()">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>
<!-- ======= Modal ======= -->
    <!-- ======= About Section ======= -->
    <section id="about">

    
      <div class="container" data-aos="zoom-in">
        
        
       
        <div class="row bg-light-c justify-content-center py-3">
          <h2 class="text-center" style="color:#0e1b4d;">Vuelos Charter</h2>
          
          <div class="col-lg-3">
            <label class="text-center text-azul">Origen</label>
            <select class="form-select" aria-label="Default select example" name="origen">
              <option selected>Seleccione lugar de origen</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-3">
            <label class="text-center text-azul">Destino</label>
            <select class="form-select" aria-label="Default select example" name="destino">
              <option selected>Seleccione lugar de destino</option>

              @foreach($destinos as $destino)
              <option value="1">{{$destino->Ciudad}}</option>
              @endforeach
              
            
              
            </select>
          </div>
          <div class="col-lg-3">
            <label class="text-center text-azul">Fecha</label><br>
            <input type="text" class="form-control" name="dates" value="Seleccione fechas" />
          </div>
          <div class="col-lg-2 text-center">
           <br>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="abrir_modal()">
     Solicitar Cotización
      </button>
          </div>
        </div>
        </form> 
      </div>
    </section><!-- End About Section -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Paquetes Turisticos</h2>
          <p>La mejor opcion para ti</p>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          @foreach($paquetes as $paquete)
          <div class="swiper-slide">
            <div class="hotel">
              <div class="hotel-img">
              <img src="{{ url('/storage/destinos/', $paquete->Imagen) }}"
                                                class=" img-fluid">
              </div>
              <h3 class="text-center pt-2 text-danger"><a href="{{url('destino',$paquete->id)}}">{{$paquete->Nombre_paquete}}</a></h3>
              <div class="stars text-center">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <p class="text-center"><b>{{$paquete->Ciudad}}</b></p>
              <p class="text-center">{{$paquete->Promocion}}</p>
            </div>
          </div>
          @endforeach
        
          
         
        
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Gallery Section -->

    <section id="subscribe">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2>Una experiencia diferente</h2>
          <p>Disfruta de nuestros vuelos charter</p>
        </div>

       
      </div>
    </section><!-- End Subscribe Section -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>OFERTAS</h2>
          <p>Encuentra las mejores ofertas con nosotros</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="{!! asset('WebPage/assets/img/speakers/1.jpg') !!}" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Nombre</a></h3>
                <p>Lugar</p>

              </div>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Speakers Section -->
  
   
    

   
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Información</h2>
          <p>La manera mas facil de comunicarte con nosotros</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt text-rojo"></i>
              <h3 class="text-azul">Direccion</h3>
              <address>agregar fisico lugar</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone text-rojo"></i>
              <h3 class="text-azul">Celular</h3>
              <p><a href="tel:+573229502225">+57 322 950 2225</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope text-rojo"></i>
              <h3 class="text-azul">Correo</h3>
              <p><a href="mailto:info@skywinair.co">info@skywinair.co</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="{{route('Informacion_post')}}" method="post" role="form" class="php-email-form">
          @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
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
    </section><!-- End Contact Section -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Sobre Nosotros</h2>
          <p>Cuando nos permites guiarte para que tomes la mejor opción para tus vacaciones,
            entonces nosotros estamos a tu entera disposición para que te mantengas contento
            de comienzo a fin en tu paseo. Nos convertimos en tu <span>aliado</span>, en tu cómplice,
            en tu compañero de diversión, porque te apoyamos con lo mejor que tenemos.</p>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">QUIENES SOMOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">MISIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">VISIÓN</a>
          </li>
        </ul>



        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">

              <div class="col-md-12">

                <p class="text-center">Nuestra amplia experiencia y excelencia en el servicio, nos hace acreedores a la
                  confianza y preferencia de nuestros clientes usuarios de viajes a diferentes destinos.

                  Estamos orientados a satisfacer los más exquisitos gustos viajando seguro y confiado, porque siempre
                  contarás con nosotros, con el mejor servicio y respaldo.</p>
              </div>
            </div>



          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">

              <div class="col-md-12">

                <p class="text-center">Proveer el mejor servicio de transporte aéreo de pasajeros,turismo,terrestres,
                  carga y correo Nacional e Internacional, a través de personas competentes y motivadas, procesos
                  eficientes y tecnología de punta; cumpliendo altos estándares de Seguridad Operacional, integración,
                  formación, crecimiento, calidad, rentabilidad y responsabilidad con nuestros clientes y y grupo de
                  trabajo, el ambiente y la comunidad.</p>

              </div>
            </div>



          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">

              <div class="col-md-12">


                <p class="text-center">Ser reconocida Nacional e Internacional mente como la mejor línea aérea y empresa
                  turística, por los estándares de Seguridad Operacional, servicio al cliente, sus valores y su gente.
                </p>

              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section><!-- End Schedule Section -->
    <section id="faq">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Preguntas Frecuentes</h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">

            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">¿Puedo llevar equipaje de mano? <i class="bi bi-chevron-down icon-show"></i><i
                    class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                    gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">¿Puedo solicitar reembolso?<i class="bi bi-chevron-down icon-show"></i><i
                    class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                    donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">¿Prestan el servicio de silla de ruedas? <i class="bi bi-chevron-down icon-show"></i><i
                    class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                    elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                    eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis
                    sed odio morbi quis
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">¿Puedo viajar con mi mascota? <i class="bi bi-chevron-down icon-show"></i><i
                    class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                    donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">¿Cuántas maletas por bodega puedo llevar? <i class="bi bi-chevron-down icon-show"></i><i
                    class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in.
                    Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est.
                    Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>

              

            </ul>

          </div>
        </div>

      </div>

    </section><!-- End  F.A.Q Section -->
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{!! asset('WebPage/assets/img/logo.png') !!}" alt="TheEvenet">
            <p>Cuando nos permites guiarte para que tomes la mejor opción para tus vacaciones, entonces nosotros estamos a tu entera disposición para que te mantengas contento de comienzo a fin en tu paseo. Nos convertimos en tu aliado, en tu cómplice, en tu compañero de diversión, porque te apoyamos con lo mejor que tenemos.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Inicio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#gallery">Paquetes Turisticos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a target="_blank" href="https://rentacarpasto.com/">Alquiler de autos</a></li>
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
              <li><i class="bi bi-chevron-right"></i> <a href="https://mail.donhosting.net:2096/" target="_blank">Colaboradores</a></li>
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
              <a href="https://www.facebook.com/profile.php?id=100063900969696&eid=ARDdcby2fQfUUytcsfzY7N18NNaVOqgJH-r998Nbrlq3Eh5civMr6myLDHv1yG-x9CazhqbMrcsRTosp" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/skywin_air/?hl=es-la" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Hache</strong>. All Rights Reserved
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