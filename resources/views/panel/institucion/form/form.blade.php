<div class="box-body">
    <div class="form-group col-md-6">
        <label>Nombre </label>
        {{Form::text('nombre',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Descripcion</label>
        {{Form::text('descripcion',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Direccion</label>
        {{Form::text('direccion',null,['class'=>'form-control','requerid','autofocus'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Telefono</label>
        {{Form::text('telefono',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Email</label>
        {{Form::text('email',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Facebook</label>
        {{Form::text('facebook',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Twiter</label>
        {{Form::text('twiter',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Vision</label>
        {{Form::text('vision',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Mision</label>
        {{Form::text('mision',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Imagen</label>
        {{Form::file('imagen',null,['class'=>'form-control','requerid'])}}
    </div>
    <div class="form-group">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    
</div><!-- /.box-body -->

    