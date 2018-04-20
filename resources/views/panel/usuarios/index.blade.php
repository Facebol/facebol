@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Usuarios</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('institucion.create')}}">
                        <a href="{{route('usuarios.create')}}" type="button" class="btn btn-success"><i class="fa fa-plus"></i>Agregar</a>
                    </a>
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellidos</th>
                                <th class="text-center">Imagen</th>
                                <th class="text-center">Correo</th>
                                <th class="text-center">Celular</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(Auth::user()->tipo=="Sadministrador")
                                @foreach($usuarios as $usuario)
                                    @if(Auth::user()->id != $usuario->id)
                                        <tr>
                                            <td class="text-center">{{ucwords($usuario->nombre)}}</td>
                                            <td class="text-center">{{ucwords($usuario->apellido)}}</td>
                                            <td class="text-center"><img src="{{asset('imagen')}}/{{$usuario->imagen}}" alt="" width="50px" height="50px" class="img-responsive img-thumbnail"></td>
                                            <td class="text-center">{{$usuario->email}}</td>
                                            <td class="text-center">{{$usuario->celular}}</td>
                                            <td  class="text-center"    > 
                                            @if($usuario->activo==1)
                                                <a href="{{route('usuarios.show',$usuario->id)}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                            @else
                                                <a href="{{route('usuarios.show',$usuario->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                            @endif
                                                <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-detalle-{{$usuario->id}}"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            </td> 
                                        </tr>      
                                        @include('panel.usuarios.show')      
                                    @endif    
                                @endforeach     
                            @endif
                            @if(Auth::user()->tipo=="Administrador")
                                @foreach($usuarios as $usuario)
                                    @if($usuario->tipo == 'Empresa' || $usuario->tipo == 'Usuario')
                                        @if(Auth::user()->id != $usuario->id)
                                            <tr>
                                                <td class="text-center">{{ucwords($usuario->nombre)}}</td>
                                                <td class="text-center">{{ucwords($usuario->apellido)}}</td>
                                                <td class="text-center"><img src="{{asset('imagen')}}/{{$usuario->imagen}}" alt="" width="50px" height="50px" class="img-responsive img-thumbnail"></td>
                                                <td class="text-center">{{$usuario->email}}</td>
                                                <td class="text-center">{{$usuario->celular}}</td>
                                                <td  class="text-center"> 
                                                @if($usuario->activo==1)
                                                    <a href="{{route('usuarios.show',$usuario->id)}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                                @else
                                                    <a href="{{route('usuarios.show',$usuario->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                                @endif
                                                    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-detalle-{{$usuario->id}}"><i class="fa fa-eye"></i></a>
                                                    <a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                                </td> 
                                            </tr>      
                                        @endif
                                        @include('panel.usuarios.show')   
                                    @endif       
                                @endforeach    
                            @endif
                            {{$usuarios->render()}}      
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellidos</th>
                                <th class="text-center">Imagen</th>
                                <th class="text-center">Correo</th>
                                <th class="text-center">Celular</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop