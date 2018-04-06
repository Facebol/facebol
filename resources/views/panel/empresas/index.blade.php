@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Empresas</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('empresas.create')}}">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>  &nbsp;&nbsp;&nbsp;&nbsp; Agregar</button>
                    </a>
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Facebook</th>
                                <th>Ciudad</th>
                                <th>Imagen</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empresa as $empresas)
                            <tr>
                                <td>{{$empresas->nombre}}</td>
                                <td>{{$empresas->telefono}}</td>
                                <td>{{$empresas->email}}</td>
                                <td>{{$empresas->facebook}}</td>
                                <td>{{$empresas->ciudad->nombre}}</td>
                                <td><img src="{{asset('imagen')}}/{{$empresas->imagen}}" width="50px" height="50px"></td>
                                <td>
                                  <a href="{{route('empresas.edit',$empresas->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-success" href="{{route('empresas.show',$empresas->id)}}"><i class="fa fa-check"></i></a>
                                </td> 
                            </tr>                        
                            @endforeach                   
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Facebook</th>
                                <th>Ciudad</th>
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