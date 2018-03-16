  <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	    <p class="centered"><img src="{{asset('img')}}/{{Auth::user()->imagen}}" class="img-circle" width="60"></p>
              	  <h5 class="centered">{!!ucfirst(Auth::user()->nombre)!!} {!!ucfirst(Auth::user()->apellido)!!}</h5>
              	  	
                  <li class="mt">
                      <a class="{{ $_SERVER['REQUEST_URI']== '/panel' ? 'active' : '' }}" href="">
                          <i class="fa fa-dashboard"></i>
                          <span>Inicio</span>
                      </a>
                  </li>
                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Servicios</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Mostrar</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="{{ $_SERVER['REQUEST_URI']== '/panel/user/create' ? 'active' : '' }}{{ $_SERVER['REQUEST_URI']== '/panel/user' ? 'active' : '' }}" >
                          <i class="fa fa-user"></i>
                          <span>Usuarios</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Mostrar</a></li>
                          <li><a  href="">Registrar</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu" class="{{ $_SERVER['REQUEST_URI']== '/panel/cliente/create' ? 'active' : '' }}{{ $_SERVER['REQUEST_URI']== '/panel/cliente' ? 'active' : '' }}">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Clientes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Mostrar</a></li>
                          <li><a  href="">Registrar</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="{{ $_SERVER['REQUEST_URI']== '/panel/user/modalidad' ? 'active' : '' }}{{ $_SERVER['REQUEST_URI']== '/panel/modalidad' ? 'active' : '' }}">
                          <i class="fa fa-book"></i>
                          <span>Modalidades</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Mostrar</a></li>
                          <li><a  href="">Registrar</a></li>
                      </ul>
                  </li>
                 
                  <li class="sub-menu">
                      <a href="javascript:;" class="{{ $_SERVER['REQUEST_URI']== '/panel/prioridad/create' ? 'active' : '' }}{{ $_SERVER['REQUEST_URI']== '/panel/prioridad' ? 'active' : '' }}">
                          <i class="fa fa-th"></i>
                          <span>Prioridad</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Mostrar</a></li>
                          <li><a  href="">Registrar</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>