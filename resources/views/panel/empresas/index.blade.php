@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Empresas</h3>
                </div><!-- /.box-header -->
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
                                <td>{{$empresas->ciudad_id}}</td>
                                <td><img src="{{asset('imagen')}}/{{$empresas->imagen}}" width="50px" height="50px"></td>
                                <td>
                                  {!!Form::open(['route'=>['empresas.destroy', $empresas->id], 'method' => 'DELETE'])!!}
                                  <a href="{{route('empresas.edit',$empresas->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                  <button class="btn btn-success"><i class="fa fa-check"></i></button>
                                  {!!Form::close()!!}
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