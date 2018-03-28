<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('img/avatar3.png')}}" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p>Hola!, Admin</p>

            <a href="#"><i class="fa fa-circle text-success"></i> En Linea</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
            <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="active">
            <a href="index.html">
                <i class="fa fa-dashboard"></i> <span>Escritorio</span>
            </a>
        </li>
        <li>
            <a href="{{route('empresas.index')}}">
                <i class="fa fa-dashboard"></i> <span>Empresas</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Administracion</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('productos.index')}}"><i class="fa fa-angle-double-right"></i> Productos</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Configuracion</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('ciudad.index')}}"><i class="fa fa-angle-double-right"></i> Ciudad</a></li>
                <li><a href="{{route('pais.index')}}"><i class="fa fa-angle-double-right"></i> Pais</a></li>
            </ul>
        </li>
    </ul>

</section>
<!-- /.sidebar -->