  <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><img src="img/{{Auth::user()->image}}" class="img-circle" width="60"></p>
              	  <h5 class="centered">{!!ucfirst(Auth::user()->name)!!} {!!ucfirst(Auth::user()->lastname)!!}</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="">
                          <i class="fa fa-dashboard"></i>
                          <span>Inicio</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Servicios</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">No Completados</a></li>
                          <li><a  href="">Completados</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>