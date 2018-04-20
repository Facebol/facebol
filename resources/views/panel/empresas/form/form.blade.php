<div class="box-body">
    <div class="form-group col-md-6">
        <label>Codigo de Usuario</label>
        {{Form::text('cod_user',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Nombre </label>
        {{Form::text('nombre',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Ciudad</label>
        {{Form::select('ciudad_id',$ciudad,null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Categoria</label>
        {{Form::select('categoria_id',$categoria,null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Descripcion</label>
        {{Form::textarea('descripcion',null,['class'=>'form-control','cols'=>'50','rows'=>'4', 'autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Horario</label>
        {{Form::text('horario',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Descuento</label>
        {{Form::text('descuento',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Promocion</label>
        {{Form::text('promocion',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Telefono</label>
        {{Form::text('telefono',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Email</label>
        {{Form::text('email',null,['class'=>'form-control','requerid','autofocus'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Facebook</label>
        {{Form::text('facebook',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Web</label>
        {{Form::text('web',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>  
    <div class="form-group col-md-6">
        <label>Direccion</label>
        {{Form::text('direccion',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Video (url ID)</label>
        {{Form::text('video',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Imagen</label>
        {{Form::file('imagen',null,['class'=>'form-control','requerid'])}}
    </div>  
</div><!-- /.box-body -->

    