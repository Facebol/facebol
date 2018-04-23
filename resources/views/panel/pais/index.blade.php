@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Empresas</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('pais.create')}}">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>  &nbsp;&nbsp;&nbsp;&nbsp; Agregar</button>
                    </a>
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pais as $pais)
                            <tr>
                                <td class="text-center">{{$pais->nombre}}</td>
                                <td class="text-center">
                                  {!!Form::open(['route'=>['pais.destroy', $pais->id], 'method' => 'DELETE'])!!}
                                  <a href="{{route('pais.edit',$pais->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                  <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                  {!!Form::close()!!}
                                </td> 
                            </tr>                        
                            @endforeach                   
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop
@section('toast')
    @if(Session::has('message'))
    toastr.success('{{\Session::get('message')}}');
    @endif
@stop