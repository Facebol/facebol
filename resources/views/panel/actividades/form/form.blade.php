<div class="box-body">
    <div class="form-group col-md-6">
        <label>Nombre </label>
        {{Form::text('nombre',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Fecha</label>
        {{Form::date('fecha',null,['class'=>'form-control','requerid'])}}
    </div> 
    <div class="form-group col-md-6">
        <label>Descripcion</label>
        {{Form::textarea('descripcion',null,['class'=>'form-control','autofocus','requerid','rows'=>4])}}
    </div>
   
    <div class="form-group col-md-6">
        <label>Tipo</label><br>
        <label>Actividad
        {{Form::radio('tipo','actividad',true)}}
        </label>
        <label>Noticia
        {{Form::radio('tipo','noticia')}}
        </label>
    </div>
    <div class="form-group col-md-12">
        <label>Imagen</label>
        {{Form::file('imagen',null,['class'=>'form-control','requerid'])}}
    </div>
</div><!-- /.box-body -->
