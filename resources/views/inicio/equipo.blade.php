<!DOCTYPE html>
<html lang="es">
  
<!-- Mirrored from agmstudio.io/themes/material-style/2.2.2/page-team2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 23:12:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Facebol</title>
    <meta name="description" content="Material Style Theme">
    @include('inicio.partes.styles.css')
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container">
      <!-- Modal -->
     @include('inicio.partes.modal')
     @include('inicio.partes.navLogo')
     @include('inicio.partes.nav')
      <div class="ms-hero-page-override ms-hero-img-city2 ms-hero-bg-primary">
        <div class="container">
          <div class="text-center">
            <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">F</span>
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Nuestro
              <span>Equipo</span> de Trabajo</h1>
            <p class="lead lead-lg color-medium text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">EL equipo de trabajo trata de brindar el mejor servicio como para las empresas y los afiliados.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row d-flex justify-content-center card-top">
          @foreach($equipos as $equipo)
          <div class="col-lg-4 col-sm-6">
            <div class="card mt-4 card-info wow zoomInUp animation-delay-7">
              <div class="ms-hero-bg-info ms-hero-img-city">
                <img src="{{asset('imagen')}}/{{$equipo->imagen}}" alt="..." class="img-avatar-circle"> </div>
              <div class="card-body pt-6 text-center">
                <h4 class="color-info">{{$equipo->nombre}}</h3>
                <h4 class="color-warning">{{$equipo->cargo}}</h3>
                <p>{{$equipo->descripcion}}</p>
                <a href="{{$equipo->facebook}}" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                  <i class="zmdi zmdi-facebook"></i>
                </a>
                <a href="{{$equipo->twitter}}" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                  <i class="zmdi zmdi-twitter"></i>
                </a>
                <a href="{{$equipo->instagram}}" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                  <i class="zmdi zmdi-instagram"></i>
                </a>
              </div>
            </div>

          </div>
          @endforeach
        </div>
      </div>
      <!-- container -->
      
      @include('inicio.partes.footer')
    </div>
    <!-- ms-site-container -->
      @include('inicio.partes.menuL')
    @include('inicio.partes.styles.js')
  </body>

<!-- Mirrored from agmstudio.io/themes/material-style/2.2.2/page-team2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 23:12:15 GMT -->
</html>