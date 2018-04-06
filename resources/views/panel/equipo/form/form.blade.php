<div class="box-body">
    <div class="form-group col-md-6">
        <label>Nombre </label>
        {{Form::text('nombre',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
    </div>
        <div class="form-group col-md-6">
            <label>Cargo </label>
            {{Form::text('cargo',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        </div>
        
            <div class="form-group col-md-6">
                <label>Facebook </label>
                {{Form::text('facebook',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
            </div>
        
                <div class="form-group col-md-6">
                    <label>Twitter </label>
                    {{Form::text('twitter',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
                </div>

    <div class="form-group col-md-6">
        <label>Instagram </label>
        {{Form::text('instagram',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
    </div>
<div class="form-group col-md-6">
        <label>Descripcion</label>
        {{Form::textarea('descripcion',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introducir descripcion','rows'=>4])}}
    </div>
    <div class="form-group col-md-12">
        <label>Imagen</label>
        {{Form::file('imagen',null,['class'=>'form-control','requerid'])}}
    </div>

</div><!-- /.box-body -->
