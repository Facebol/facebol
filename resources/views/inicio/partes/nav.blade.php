<nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-primary">
    <div class="container container-full">
      <div class="navbar-header">
        <a class="navbar-brand" href="index-2.html">
          <img src="assets/img/demo/logo-navbar.png" alt=""> 
         <!-- <span class="ms-logo ms-logo-sm">F</span>
          <span class="ms-title">ace
            <strong>Bol</strong>
          </span>-->
        </a>
      </div>
      <div class="collapse navbar-collapse" id="ms-navbar">
        <ul class="navbar-nav">
          <li class="nav-item dropdown active">
            <a href="" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="home">Inicio
              <i class="zmdi zmdi-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{route('inicio')}}">
                  <i class="zmdi zmdi-sort-amount-desc"></i> Pagina Principal</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Empresas
              <i class="zmdi zmdi-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{route('empresa')}}">
                  <i class="zmdi zmdi-sort-amount-desc"></i> Todas las empresas</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-8" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="portfolio">Categoria
              <i class="zmdi zmdi-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              @foreach($categorias as $categoria)
              <li>
                <a class="dropdown-item" href="{{route('categoria',$categoria->id)}}">
                  <i class="zmdi zmdi-sort-amount-desc"></i> {{$categoria->nombre}}</a>
              </li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="">Actividades
              <i class="zmdi zmdi-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{route('actividad')}}">
                  <i class="zmdi zmdi-sort-amount-desc"></i> Todas las Actividades</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="">Nuestro Equipo
              <i class="zmdi zmdi-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{route('equipo')}}">
                  <i class="zmdi zmdi-sort-amount-desc"></i> Nuestro Equipo de Trabajo</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-8" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="portfolio">Contactanos
              <i class="zmdi zmdi-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{route('contactanos')}}">
                  <i class="zmdi zmdi-sort-amount-desc"></i> Envianos un mensaje</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
        <i class="zmdi zmdi-menu"></i>
      </a>
    </div>
    <!-- container -->
  </nav>