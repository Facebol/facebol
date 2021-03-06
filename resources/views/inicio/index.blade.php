@extends('inicio.template')
@section('contenido')

<div class="container mt-4">
  <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Quienes Somos</h2>
  <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4">{{$institucion->qSomos}}.</p>
  <div class="row">
    <div class="ms-feature col-xl-6 col-lg-6 col-md-6 card wow flipInX animation-delay-4">
      <div class="text-center card-body">
        <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
          <i class="zmdi zmdi-cloud-outline"></i>
        </span>
        <h4 class="color-info">Mision</h4>
        <p class="">{{$institucion->mision}}</p>
      </div>
    </div>
    <div class="ms-feature col-xl-6 col-lg-6 col-md-6 card wow flipInX animation-delay-8">
      <div class="text-center card-body">
        <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
          <i class="zmdi zmdi-desktop-mac"></i>
        </span>
        <h4 class="color-warning">Vision</h4>
        <p class="">{{$institucion->vision}}</p>
      </div>
    </div>
  </div>
</div>
<!-- container -->
<div class="wrap wrap-mountain mt-6">
  <div class="container">
    <h2 class="text-center text-light mb-6 wow fadeInDown animation-delay-5"><strong>Trabaja con Nosotros</strong></h2>
    <div class="row">
      <div class="col-lg-6 order-lg-2 mb-4  center-block">
        <img src="assets/img/demo/mock.png" alt="" class="img-fluid center-block wow zoomIn animation-delay-12 "> </div>
      <div class="col-lg-6 order-lg-1 pr-6">
        {{htmlentities($institucion->trabaja)}}
      </div>
    </div>
  </div>
</div>
<!-- container -->
<div class="container mt-6">
  <div class="text-center mb-4">
    <h2 class="uppercase color-primary">Este es nuestro Plan</h2>
    <p class="lead uppercase">Con el cual puedes accerder a muchos beneficios</p>
  </div>
  <div class="row no-gutters">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <div class="price-table price-table-warning wow zoomInUp animation-delay-2">
        <header class="price-table-header">
          <span class="price-table-category">{{$plan->nombre}}</span>
          <h3>
            <sup>{{$plan->moneda}}</sup>{{$plan->precio}}
            <sub>/{{$plan->plan}}</sub>
          </h3>
        </header>
        <div class="price-table-body">
          <ul class="price-table-list">
            @foreach($planDetalle as $descripcion)
            <li>
              <i class="zmdi zmdi-star"></i> {{$descripcion->descripcion}}</li>
            @endforeach
          </ul>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
  </div>
</div>
<!--container -->

@stop