     <div class="form-group col-md-12">
        <label class="col-sm-2 col-sm-2 control-label">Modalidad</label>
        <div class="col-sm-10">
            {!!Form::select('id_Modalidad',$modalidades,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
     <div class="form-group col-md-12">
        <label class="col-sm-2 col-sm-2 control-label">Prioridad</label>
        <div class="col-sm-10">
            {!!Form::select('id_Prioridad',$prioridades,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
     <div class="form-group col-md-12">
        <label class="col-sm-2 col-sm-2 control-label">Fecha de Entrega</label>
        <div class="col-sm-10">
           {{Form::date('dateE', \Carbon\Carbon::now()),['class' => 'form-control round-form']}}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
     <div class="form-group col-md-12">
        <label class="col-sm-2 col-sm-2 control-label">Nombre destinatario</label>
        <div class="col-sm-10">
          {!!Form::text('name', null,['class' => 'form-control round-form','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
     <div class="form-group col-md-12">
        <label class="col-sm-2 col-sm-2 control-label">Apellido destinatario del Destinatario</label>
        <div class="col-sm-10">
          {!!Form::text('lastname', null,['class' => 'form-control round-form','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
      <div class="form-group col-md-12">
        <label class="col-sm-2 col-sm-2 control-label">Direccion del Destinatario</label>
        <div class="col-sm-10">
          {!!Form::text('address', null,['class' => 'form-control round-form','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
     <div class="form-group col-md-12">
        <label class="col-sm-2 col-sm-2 control-label">Descripcion del Destinatario</label>
        <div class="col-sm-10">
          {!!Form::text('description', null,['class' => 'form-control round-form','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group col-md-12">
        <label class="col-sm-2 col-sm-2 control-label">Celular del destinatario</label>
        <div class="col-sm-10">
          {!!Form::number('phone', null,['class' => 'form-control round-form','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>