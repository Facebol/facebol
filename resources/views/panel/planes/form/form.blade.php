<div class="box-body">
        <div class="form-group col-md-6">
            <label>Nombre </label>
            {{Form::text('nombre',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
    </div>
</div>
<div class="box-body">
        <div class="form-group col-md-6">
            <label>Precio </label>
            {{Form::text('precio',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
    </div>
</div>
<div class="box-body">
        <div class="form-group col-md-6">
            <label>Plan </label>
            {{Form::text('plan',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
</div>
</div>
<div class="box-body">
        <div class="form-group col-md-6">
        <label>Moneda </label>
        {{Form::text('moneda',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
</div>
</div>
@foreach($planDetalle as $descripcion)
<div class="box-body">
    <div class="form-group col-md-6">
            <label>Descripcion {{$descripcion->id}} </label>
    {{Form::textarea('nombre-'.$descripcion->id.'',$descripcion->descripcion,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre','rows'=>4])}}
</div>
</div>
@endforeach
    
    