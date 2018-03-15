    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            {!!Form::text('name', null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Apellido</label>
        <div class="col-sm-10">
            {!!Form::text('lastname', null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Correo</label>
        <div class="col-sm-10">
            {!!Form::email('email', null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Celular</label>
        <div class="col-sm-10">
            {!!Form::number('phone', null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
        <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Direccion</label>
        <div class="col-sm-10">
            {!!Form::text('address', null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>