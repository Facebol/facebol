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
	                  	  	  <h4 class="text-center"><i class="fa fa-tasks"></i> Modalidades Registrados</h4>
	                  	  	  <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Descripcion</th>
                                  <th><i class="fa fa-edit"></i> Precio</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Creacion</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($modalidades as $modalidad)
                                <tr> 
                                    <td>{{$modalidad->name}}</td>
                                    <td>{{$modalidad->description}}</td>
                                    <td>{{$modalidad->price}}</td>
                                    <td>{{$modalidad->created_at}}</td>
                                    <td> 
                                          <a href="#" data-target="#modal-delete-{{$modalidad->id}}" data-toggle="modal" class="btn btn-danger btn-xs">
                                          <i class="fa fa-trash-o"></i></a>
                                          <a href="{{route('modalidad.edit',$modalidad->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr> 
                                @include('panel.panel-a.modalidad.modal')
                             @endforeach
                              </tbody>
                          </table>
                        
                      </div><!-- /content-panel -->
                      <div class="text-center">{{$modalidades->render()}}</div>
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