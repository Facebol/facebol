    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            {!!Form::text('name', null,['class' => 'form-control round-form','autofocus','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Apellido</label>
        <div class="col-sm-10">
            {!!Form::text('lastname', null,['class' => 'form-control round-form','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Correo</label>
        <div class="col-sm-10">
            {!!Form::email('email', null,['class' => 'form-control round-form','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Contraseña</label>
        <div class="col-sm-10">
            {!!Form::password('password',['class' => 'form-control round-form','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
     <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Imagen</label>
        <div class="col-sm-10">
        <span class="btn btn-theme">
            {!!Form::file('image', null,['class' => 'form-control round-form','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </span>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Tipo</label>
        <div class="col-sm-10">
            <div class="radio">
				 {!!Form::radio('type', 'admin', true,['id'=>'admin'])!!}
				<label for="admin">Admin</label>
		
				{!!Form::radio('type', 'currier', false,['id'=>'currier'])!!}
				<label for="currier">Currier</label>
			</div>
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Celular</label>
        <div class="col-sm-10">
            {!!Form::number('phone', null,['class' => 'form-control round-form','required','min'=>'60000000','max'=>'999999999'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
        <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Direccion</label>
        <div class="col-sm-10">
            {!!Form::text('address', null,['class' => 'form-control round-form','required'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>