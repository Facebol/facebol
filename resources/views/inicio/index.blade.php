<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from agmstudio.io/themes/material-style/2.2.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 23:06:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Facebol</title>
    <meta name="description" content="Material Style Theme">
    @include('inicio.partes.styles.css')

  </head>
  <body>
    <a href="javascript:void(0)" class="ms-conf-btn ms-configurator-btn btn-circle btn-circle-raised btn-circle-primary animated rubberBand">
      <i class="fa fa-gears"></i>
    </a>
    @include('inicio.partes.conf')
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container">
     
    @include('inicio.partes.modal')
    @include('inicio.partes.navLogo')  
    @include('inicio.partes.nav')
    @include('inicio.partes.slider')
      <!-- ms-hero ms-hero-black -->
      <div class="container mt-4">
        <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Quienes SOmos</h2>
        <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4"> Lorem ipsum dolor sit amet,
          <span class="color-primary">consectetur adipisicing</span> elit. Dolor alias provident excepturi eligendi, nam numquam iusto eum illum, ea quisquam.</p>
        <div class="row">
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-4">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
                <i class="zmdi zmdi-cloud-outline"></i>
              </span>
              <h4 class="color-info">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-info btn-raised">Action here</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-8">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
                <i class="zmdi zmdi-desktop-mac"></i>
              </span>
              <h4 class="color-warning">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-warning btn-raised">Action here</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-10">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success">
                <i class="zmdi zmdi-car-taxi"></i>
              </span>
              <h4 class="color-success">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-success btn-raised">Action here</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-6">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">
                <i class="zmdi zmdi-flower-alt"></i>
              </span>
              <h4 class="color-danger">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-danger btn-raised">Action here</a>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
      <div class="wrap wrap-mountain mt-6">
        <div class="container">
          <h2 class="text-center text-light mb-6 wow fadeInDown animation-delay-5">Material Design is a
            <strong>new way</strong> to create designs</h2>
          <div class="row">
            <div class="col-lg-6 order-lg-2 mb-4  center-block">
              <img src="assets/img/demo/mock.png" alt="" class="img-fluid center-block wow zoomIn animation-delay-12 "> </div>
            <div class="col-lg-6 order-lg-1 pr-6">
              <p class="wow fadeInLeft animation-delay-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam sint officiis odio tempora natus, sed voluptas facilis ullam suscipit. Ducimus quas, eius ut, dolores mollitia sapiente doloremque aliquid sequi eaque.</p>
              <p class="wow fadeInLeft animation-delay-7">Adipisicing elit. Sapiente porro voluptatem rerum modi quibusdam accusantium nihil facere cupiditate quam! Ipsa.</p>
              <p class="wow fadeInLeft animation-delay-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quasi voluptatem, similique corrupti necessitatibus nihil error, nemo delectus voluptates deserunt ducimus quaerat molestiae labore id repellat exercitationem asperiores neque
                quibusdam.</p>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised mr-1 wow flipInX animation-delay-14">
                  <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                <a href="javascript:void(0)" class="btn btn-info btn-raised wow flipInX animation-delay-16">
                  <i class="zmdi zmdi-case"></i> Button</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-6">
        <h1 class="font-light">Technology that brings teams together</h1>
        <p class="lead color-primary">— Intelligent apps that help you do your best work. </p>
        <div class="panel panel-light panel-flat">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
            <li class="nav-item wow fadeInDown animation-delay-6" role="presentation">
              <a href="#windows" aria-controls="windows" role="tab" data-toggle="tab" class="nav-link withoutripple">
                <i class="zmdi zmdi-windows"></i>
                <span class="d-none d-md-inline">Windows</span>
              </a>
            </li>
            <li class="nav-item wow fadeInDown animation-delay-4" role="presentation">
              <a href="#macos" aria-controls="macos" role="tab" data-toggle="tab" class="nav-link withoutripple active">
                <i class="zmdi zmdi-apple"></i>
                <span class="d-none d-md-inline">MacOS</span>
              </a>
            </li>
            <li class="nav-item wow fadeInDown animation-delay-2" role="presentation">
              <a href="#linux" aria-controls="linux" role="tab" data-toggle="tab" class="nav-link withoutripple">
                <i class="fa fa-linux"></i>
                <span class="d-none d-md-inline">Linux</span>
              </a>
            </li>
            <li class="nav-item wow fadeInDown animation-delay-4" role="presentation">
              <a href="#android" aria-controls="android" role="tab" data-toggle="tab" class="nav-link withoutripple">
                <i class="zmdi zmdi-android"></i>
                <span class="d-none d-md-inline">Android</span>
              </a>
            </li>
            <li class="nav-item wow fadeInDown animation-delay-6" role="presentation">
              <a href="#ios" aria-controls="ios" role="tab" data-toggle="tab" class="nav-link withoutripple">
                <i class="zmdi zmdi-smartphone-iphone"></i>
                <span class="d-none d-md-inline">IOS</span>
              </a>
            </li>
          </ul>
          <div class="panel-body">
            <!-- Tab panes -->
            <div class="tab-content mt-4">
              <div role="tabpanel" class="tab-pane fade" id="windows">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="assets/img/demo/mock4.png" alt="" class="img-fluid animated zoomIn animation-delay-8"> </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane active show fade" id="macos">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="assets/img/demo/mock2.png" alt="" class="img-fluid wow animated zoomIn animation-delay-8"> </div>
                  <div class="col-lg-6">
                    <h3 class="text-normal wow animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md  wow animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md wow animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised wow animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 wow animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="linux">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="assets/img/demo/mock5.png" alt="" class="img-fluid animated zoomIn animation-delay-8"> </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="android">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="assets/img/demo/mock6.png" alt="" class="img-fluid animated zoomIn animation-delay-8"> </div>
                  <div class="col-lg-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="ios">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="assets/img/demo/mock3.png" alt="" class="img-fluid animated zoomIn animation-delay-8"> </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- panel -->
      </div>
      <!-- container -->
      <div class="container mt-6">
        <div class="text-center mb-4">
          <h2 class="uppercase color-primary">See our subscription plans</h2>
          <p class="lead uppercase">Surprise with our unique features</p>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-4">
            <div class="price-table price-table-info wow zoomInUp animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">Personal</span>
                <h3>
                  <sup>$</sup>19.99
                  <sub>/mo.</sub>
                </h3>
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li>
                    <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li>
                    <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li>
                    <i class="zmdi zmdi-settings"></i> Dignissimos velit reic cumque.</li>
                  <li>
                    <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li>
                    <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-info btn-raised">
                    <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="price-table price-table-success prominent wow zoomInDown animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">Professional</span>
                <h3>
                  <sup>$</sup>49.99
                  <sub>/mo.</sub>
                </h3>
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li>
                    <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li>
                    <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li>
                    <i class="zmdi zmdi-settings"></i> Dignissimos velit reic cumque.</li>
                  <li>
                    <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li>
                    <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-success btn-raised">
                    <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="price-table price-table-warning wow zoomInUp animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">Business</span>
                <h3>
                  <sup>$</sup>99.99
                  <sub>/mo.</sub>
                </h3>
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li>
                    <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li>
                    <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li>
                    <i class="zmdi zmdi-settings"></i> Dignissimos velit reic cumque.</li>
                  <li>
                    <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li>
                    <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-warning btn-raised">
                    <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--container -->
      <div class="wrap wrap-danger mt-6">
        <h2 class="text-center no-m">What our customers say</h2>
        <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="7000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-2 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-2 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-2 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control-prev btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-left"></i>
          </a>
          <a class="right carousel-control-next btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-right"></i>
          </a>
        </div>
      </div>
      <div class="container mt-6">
        <h2 class="text-center color-primary mb-4">Our Latest Works</h2>
        <div class="owl-dots"></div>
        <div class="owl-carousel owl-theme">
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="assets/img/demo/port4.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="assets/img/demo/port24.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-body">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="assets/img/demo/port7.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="assets/img/demo/port8.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="assets/img/demo/port9.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-body">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="assets/img/demo/port5.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="assets/img/demo/port11.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="assets/img/demo/port3.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-body">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="assets/img/demo/port14.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <aside class="ms-footbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 ms-footer-col">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Sitemap</h3>
                <ul class="list-unstyled ms-icon-list three_cols">
                  <li>
                    <a href="index-2.html">
                      <i class="zmdi zmdi-home"></i> Home</a>
                  </li>
                  <li>
                    <a href="page-blog.html">
                      <i class="zmdi zmdi-edit"></i> Blog</a>
                  </li>
                  <li>
                    <a href="page-blog.html">
                      <i class="zmdi zmdi-image-o"></i> Portafolio</a>
                  </li>
                  <li>
                    <a href="portfolio-filters_sidebar.html">
                      <i class="zmdi zmdi-case"></i> Works</a>
                  </li>
                  <li>
                    <a href="page-timeline_left2.html">
                      <i class="zmdi zmdi-time"></i> Timeline</a>
                  </li>
                  <li>
                    <a href="page-pricing.html">
                      <i class="zmdi zmdi-money"></i> Pricing</a>
                  </li>
                  <li>
                    <a href="page-about.html">
                      <i class="zmdi zmdi-favorite-outline"></i> About Us</a>
                  </li>
                  <li>
                    <a href="page-team2.html">
                      <i class="zmdi zmdi-accounts"></i> Our Team</a>
                  </li>
                  <li>
                    <a href="page-services.html">
                      <i class="zmdi zmdi-face"></i> Services</a>
                  </li>
                  <li>
                    <a href="page-faq2.html">
                      <i class="zmdi zmdi-help"></i> FAQ</a>
                  </li>
                  <li>
                    <a href="page-login2.html">
                      <i class="zmdi zmdi-lock"></i> Login</a>
                  </li>
                  <li>
                    <a href="page-contact.html">
                      <i class="zmdi zmdi-email"></i> Contact</a>
                  </li>
                </ul>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Subscribe</h3>
                <p class="">Lorem ipsum Amet fugiat elit nisi anim mollit minim labore ut esse Duis ullamco ad dolor veniam velit.</p>
                <form>
                  <div class="form-group label-floating mt-2 mb-1">
                    <div class="input-group ms-input-subscribe">
                      <label class="control-label" for="ms-subscribe">
                        <i class="zmdi zmdi-email"></i> Email Adress</label>
                      <input type="email" id="ms-subscribe" class="form-control"> </div>
                  </div>
                  <button class="ms-subscribre-btn" type="button">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-7 ms-footer-col ms-footer-alt-color">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title text-center mb-2">Last Articles</h3>
                <div class="ms-footer-media">
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Lorem ipsum dolor sit expedita cumque amet consectetur adipisicing repellat</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Design</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Labore ut esse Duis consectetur expedita cumque ullamco ad dolor veniam velit</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">News</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">voluptates deserunt ducimus expedita cumque quaerat molestiae labore</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Productivity</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-5 ms-footer-col ms-footer-text-right">
              <div class="ms-footbar-block">
                <div class="ms-footbar-title">
                  <span class="ms-logo ms-logo-white ms-logo-sm mr-1">M</span>
                  <h3 class="no-m ms-site-title">Material
                    <span>Style</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">example@domain.com</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+34 123 456 7890 </p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
                </address>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Social Media</h3>
                <div class="ms-footbar-social">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-youtube">
                    <i class="zmdi zmdi-youtube-play"></i>
                  </a>
                  <br>
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-instagram">
                    <i class="zmdi zmdi-instagram"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-github">
                    <i class="zmdi zmdi-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <footer class="ms-footer">
        <div class="container">
          <p>Copyright &copy; Material Style 2017</p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>
    <!-- ms-site-container -->
   @include('inicio.partes.footer')
   @include('inicio.partes.styles.js')
  </body>

<!-- Mirrored from agmstudio.io/themes/material-style/2.2.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 23:09:42 GMT -->
</html>