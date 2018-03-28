@extends('panel.template')
@section('contenido')
<div class="col-xs-12 col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Agregar ciudad</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
       	{{Form::open(['route'=>'ciudad.store','method'=>'POST','files'=>true])}} 
        @include('panel.ciudad.form.form')

		<div class="box-footer col-md-12 text-center">
			{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
            <a href="{{('./')}}">
		      <button type="button" class="btn btn-danger"><i class="fa fa-close"></i> Cancelar</button>
		    </a>
        </div>
		{{Form::close()}}
    </div><!-- /.box -->
</div>
@stop