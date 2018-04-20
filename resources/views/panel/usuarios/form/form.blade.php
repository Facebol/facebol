<div class="box-body">
    <div class="form-group col-md-6">
        <label>Nombre </label>
        {{Form::text('nombre',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Apellido</label>
        {{Form::text('apellido',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Carnet de identidad</label>
        {{Form::number('ci',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Correo Electronico</label>
        {{Form::email('email',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Direccion</label>
        {{Form::text('direccion',null,['class'=>'form-control','requerid','autofocus'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Celular</label>
        {{Form::number('celular',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Contraseña</label>
        {{Form::password('password',['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Confirmar Contraseña</label>
            {{Form::password('password',['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Imagen</label>
        {{Form::file('imagen',['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Tipo</label><br>
        <label>Administrador
        {{Form::radio('tipo','Administrador',true)}}
        </label>
        <label>Usuario
        {{Form::radio('tipo','Usuario')}}
        </label>
        <label>Empresa
        {{Form::radio('tipo','Empresa')}}
        </label>
    </div>
    <div class="form-group col-md-6">
            <label>Ciudad</label>
            {{Form::select('ciudad_id',$ciudades,null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    
</div><!-- /.box-body -->

    