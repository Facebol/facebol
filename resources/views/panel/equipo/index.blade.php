@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Equipo</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('equipo.create')}}">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>  &nbsp;&nbsp;&nbsp;&nbsp; Agregar</button>
                    </a>
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Imagen</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($equipo as $equipo)
                            <tr>
                                <td>{{$equipo->nombre}}</td>
                                <td><img src="{{asset('imagen')}}/{{$equipo->imagen}}" width="50px" height="50px"></td>
                                <td>
                                  {!!Form::open(['route'=>['equipo.destroy', $equipo->id], 'method' => 'DELETE'])!!}
                                  <a href="{{route('equipo.edit',$equipo->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                  <button class="btn btn-success"><i class="fa fa-check"></i></button>
                                  {!!Form::close()!!}
                                </td> 
                            </tr>                        
                            @endforeach                   
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Imagen</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop