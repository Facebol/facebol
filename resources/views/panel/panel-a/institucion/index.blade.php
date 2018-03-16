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
	                  	  	  <h4 class="text-center"><i class="fa fa-tasks"></i> Instituciones Registradass</h4>
	                  	  	  <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Descripcion</th>
                                  <th width=""><i class="fa fa-edit"></i> Direccion</th>
                                  <th><i class="fa fa-edit"></i> Telefono</th>
                                  <th><i class="fa fa-edit"></i> Correo</th>
                                  <th><i class="fa fa-edit"></i> Facebook</th>
                                  <th><i class="fa fa-edit"></i> Twitter</th>
                                  <th><i class="fa fa-edit"></i> Imagen</th>
                                  <th><i class="fa fa-edit"></i> Vision</th>
                                  <th><i class="fa fa-edit"></i> Mision</th>
                                  <th><i class="fa fa-edit"></i> Imagen Slider</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($instituciones as $institucion)
                                <tr> 
                                    <td>{{$institucion->nombre}}</td>
                                    <td>{{$institucion->descripcion}}</td>
                                    <td>{{$institucion->direccion}}</td>
                                    <td>{{$institucion->telefono}}</td>
                                    <td>{{$institucion->email}}</td>
                                    <td>{{$institucion->facebook}}</td>
                                    <td>{{$institucion->twitter}}</td>
                                    <td><img src="{{asset('img')}}/{{$institucion->imagen}}" width="80px" height="80px"></td>
                                    <td>{{$institucion->vision}}</td>
                                    <td>{{$institucion->mision}}</td>
                                    <td>{{$institucion->imagen_slider}}</td>
                                    <td> 
                                          <a href="{{route('institucion.edit',$institucion->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr> 
                             @endforeach
                              </tbody>
                          </table>
                        
                      </div><!-- /content-panel -->
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