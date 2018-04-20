@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Actividades</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('actividades.create')}}">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Agregar</button>
                    </a>
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead >
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Imagen</th>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($actividades as $actividad)
                            <tr>
                                <td class="text-center">{{$actividad->nombre}}</td>
                                <td class="text-center"><img src="{{asset('imagen')}}/{{$actividad->imagen}}" width="50px" height="50px"></td>
                                <td class="text-center">{{$actividad->fecha}}</td>
                                <td class="text-center">
                                  {!!Form::open(['route'=>['actividades.destroy', $actividad->id], 'method' => 'DELETE'])!!}
                                  <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-detalle-{{$actividad->id}}"><i class="fa fa-eye"></i></a>
                                  @if($actividad->activo==1)
                                  <a href="{{route('actividades.show',$actividad->id)}}" class="btn btn-info btn-sm"><i class="fa fa-check"></i></a>
                                  @else
                                  <a href="{{route('actividades.show',$actividad->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                  @endif
                                  <a href="{{route('actividades.edit',$actividad->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                  {!!Form::close()!!}
                                </td> 
                            </tr>
                            @include('panel.actividades.show')                        
                            @endforeach                   
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Imagen</th>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop