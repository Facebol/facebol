<div class="box-body">
    <div class="form-group col-md-6">
        <label>Nombre </label>
        {{Form::text('nombre',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Descripcion</label>
        {{Form::text('descripcion',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Imagen</label>
        {{Form::file('imagen',null,['class'=>'form-control','requerid'])}}
    </div>
    <div class="form-group">
        <p class="help-block"></p>
    </div>  
</div><!-- /.box-body -->
