@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Instituciones</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('institucion.create')}}">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>  &nbsp;&nbsp;&nbsp;&nbsp; Agregar</button>
                    </a>
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Facebook</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($institucion as $instituciones)
                            <tr>
                                <td><img src="{{asset('imagen')}}/{{$instituciones->imagen}}" width="50px" height="50px"></td>
                                <td>{{$instituciones->nombre}}</td>
                                <td>{{$instituciones->direccion}}</td>
                                <td>{{$instituciones->telefono}}</td>
                                <td>{{$instituciones->email}}</td>
                                <td>{{$instituciones->facebook}}</td>
                                <td>
                                  
                                  <a href="{{route('institucion.edit',$instituciones->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                  <button class="btn btn-success"><i class="fa fa-check"></i></button>
                                  {!!Form::close()!!}
                                </td> 
                            </tr>                        
                            @endforeach                   
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Facebook</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop