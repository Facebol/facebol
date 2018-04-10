<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from agmstudio.io/themes/material-style/2.2.2/portfolio-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 23:13:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Facebol</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="assets/img/favicon30f4.png?v=3">
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
      <div class="ms-hero-page ms-hero-img-meeting ms-hero-bg-primary ms-bg-fixed mb-4">
        <div class="container">
          <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Empresas</h1>
            <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Empresas Afiliadas
              <br>Estas son todas las empresas, las cuales ofrecen proociones y/o descuentos a las personas que esten afiliadas a Facebol.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row text-center">
              <!-- item -->
              @foreach($empresas as $empresa)
              @if($empresa->activo==1)
              <div class="col-lg-4 col-md-6">
                <div class="card width-auto">
                  <figure class="ms-thumbnail ms-thumbnail-horizontal">
                    <img src="{{asset('imagen')}}/{{$empresa->imagen}}" alt="" class="img-fluid">
                    <figcaption class="ms-thumbnail-caption text-center">
                      <div class="ms-thumbnail-caption-content">
                        <h4 class="ms-thumbnail-caption-title mb-2">{{$empresa->nombre}}</h4>
                        <a href="{{$empresa->facebook}}" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                          <i class="zmdi zmdi-facebook"></i>
                        </a>
                        <a href="mailto:{{$empresa->email}}" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                          <i class="zmdi zmdi-email"></i>
                        </a>
                        <a href="{{$empresa->web}}" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                          <i class="zmdi zmdi-globe"></i>
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                  <div class="card-body text-center">
                    <a href="javascript:void(0)" class="btn-circle btn-circle-warning btn-circle-raised btn-card-float right wow zoomInDown index-2">
                      <i class="zmdi zmdi-star"></i>
                    </a>
                    <h4 class="color-warning">{{$empresa->nombre}}</h4>
                    <p><strong>Descripcion :</strong>{{$empresa->descripcion}}</p>
                    <p><strong>Promocion :</strong> {{$empresa->promocion}}</p>
                    <p><strong>Horario :</strong> {{$empresa->horario}}</p>
                    <p><strong>Direccion :</strong> {{$empresa->direccion}}</p>
                    <p><strong>Contacto :</strong> {{$empresa->telefono}}</p>
                    <a href="javascript:void(0)" class="btn btn-warning">
                      <i class="zmdi zmdi-star"></i> {{$empresa->descuento}}</a>
                    <a href="javascript:void(0)" class="btn btn-warning btn-raised">
                      <i class="zmdi zmdi-globe"></i> {{$empresa->ciudad->nombre}}</a>
                  </div>
                </div>
              </div>
              @endif
              @endforeach
              <!-- item -->
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
     @include('inicio.partes.footer')
    </div>
    <!-- ms-site-container -->
     @include('inicio.partes.menuL')
  @include('inicio.partes.styles.js')
  </body>

<!-- Mirrored from agmstudio.io/themes/material-style/2.2.2/portfolio-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 23:13:23 GMT -->
</html>