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
	                  	  	  <h4 class="text-center"><i class="fa fa-tasks"></i> Servicio Registrados sin Completar</h4>
	                  	  	  <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-edit"></i> Modalidad</th>
                                  <th><i class="fa fa-edit"></i> Prioridad</th>
                                  <th><i class="fa fa-edit"></i> Currier</th>
                                  <th><i class="fa fa-edit"></i> Descripcion</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Entrega</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Registro</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($servicios_NE as $servicio)
                                <tr> 
                                    <td>{{$servicio->Modalidad->name}}</td>
                                    <td>{{$servicio->Prioridad->name}}</td>
                                    <td>{{$servicio->Currier->name}}</td>
                                    <td>{{$servicio->description}}</td>
                                    <td>{{$servicio->dateE}}</td>
                                    <td>{{$servicio->created_at}}</td>
                                    <td> 
                                          <a href="#" data-target="#modal-delete-{{$servicio->id}}" data-toggle="modal" class="btn btn-danger btn-xs">
                                          <i class="fa fa-trash-o"></i></a>
                                          <a href="#" data-target="#modal-detalle-{{$servicio->id}}" data-toggle="modal" class="btn btn-success btn-xs">
                                          <i class="fa fa-plus"></i></a>
                                          <a href="{{route('servicio.edit',$servicio->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr> 
                                 @include('panel.panel-a.servicio.modal-delete')
                                 @include('panel.panel-a.servicio.modal-detalle')
                             @endforeach
                              </tbody>
                          </table>
                        
                      </div><!-- /content-panel -->
                      <div class="text-center">{{$servicios_NE->render()}}</div>
                  </div><!-- /col-md-12 -->
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4 class="text-center"><i class="fa fa-tasks"></i> Servicio Registrados Completados</h4>
	                  	  	  <hr>
                              <thead>
                               <tr>
                                 <th><i class="fa fa-edit"></i> Nombre del Desinatario</th>
                                  <th><i class="fa fa-edit"></i> Modalidad</th>
                                  <th><i class="fa fa-edit"></i> Prioridad</th>
                                  <th><i class="fa fa-edit"></i> Currier</th>
                                  <th><i class="fa fa-edit"></i> Descripcion</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Entrega</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Entrega Final</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($servicios_E as $servicio)
                                <tr> 
                                    <td>{{$servicio->name}} {{$servicio->lastname}}</td>
                                    <td>{{$servicio->Modalidad->name}}</td>
                                    <td>{{$servicio->Prioridad->name}}</td>
                                    <td>{{$servicio->Currier->name}}</td>
                                    <td>{{$servicio->description}}</td>
                                    <td>{{$servicio->dateE}}</td>
                                    <td>{{$servicio->dateF}}</td>

                                </tr> 
                                 @include('panel.panel-a.servicio.modal-delete')
                                 @include('panel.panel-a.servicio.modal-detalle')
                             @endforeach
                              </tbody>
                          </table>
                        
                      </div><!-- /content-panel -->
                      <div class="text-center">{{$servicios_E->render()}}</div>
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