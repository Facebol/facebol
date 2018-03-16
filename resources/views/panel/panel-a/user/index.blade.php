<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Logistica</title>

        @include('panel.styles.css')

    </head>

    <body>

        @include('panel.parts.header')

        <section id="container" >
         @include('panel.parts.menu.menu-a')
            <section id="main-content">
                <section class="wrapper">
                     <div class="row">
           

                    <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4 class="text-center"><i class="fa fa-tasks"></i> Usuarios Registrados</h4>
	                  	  	  <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Apellido</th>
                                  <th width=""><i class="fa fa-edit"></i> Correo</th>
                                  <th><i class="fa fa-edit"></i> Imagen</th>
                                  <th><i class="fa fa-edit"></i> Tipo</th>
                                  <th><i class="fa fa-edit"></i> Celular</th>
                                  <th><i class="fa fa-edit"></i> Direccion</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Creacion</th>
                                  <th><i class="fa fa-edit"></i> Acciones {{ $_SERVER['REQUEST_URI']}}</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($usuarios as $usuario)
                                @if($usuario->id != Auth::user()->id)
                                <tr> 
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->lastname}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td><img src="../img/{{$usuario->image}}" class="img-circle" width="80px" height="80px"></td>
                                    @if($usuario->type=="admin")
                                    <td><span class="label label-warning">{{$usuario->type}}</span></td>
                                    @else
                                    <td><span class="label label-success">{{$usuario->type}}</span></td>
                                    @endif 
                                    <td>{{$usuario->phone}}</td>
                                    <td>{{$usuario->address}}</td>
                                    <td>{{$usuario->created_at}}</td>
                                    <td> 
                                          <a href="#" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal" class="btn btn-danger btn-xs">
                                          <i class="fa fa-trash-o"></i></a>
                                          <a href="{{route('user.edit',$usuario->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr> 
                                @include('panel.panel-a.user.modal')
                                @endif
                             @endforeach
                              </tbody>
                          </table>
                        
                      </div><!-- /content-panel -->
                      <div class="text-center">{{$usuarios->render()}}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
                    </div>
                </section>
            </section>
            @include('panel.parts.footer')
            
        </section>

        @include('panel.styles.js')

    </body>

</html>