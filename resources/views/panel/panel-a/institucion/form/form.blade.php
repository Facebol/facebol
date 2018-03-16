    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            {!!Form::text('nombre', null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Descripcion</label>
        <div class="col-sm-10">
            {!!Form::text('descripcion', null,['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Direccion</label>
        <div class="col-sm-10">
            {!!Form::text('direccion', null,['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Telefono</label>
        <div class="col-sm-10">
            {!!Form::text('telefono', null,['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Correo</label>
        <div class="col-sm-10">
            {!!Form::email('email', null,['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Facebook</label>
        <div class="col-sm-10">
            {!!Form::text('facebook', null,['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Twitter</label>
        <div class="col-sm-10">
            {!!Form::text('twitter', null,['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Logo</label>
        <div class="col-sm-10">
            {!!Form::file('image',['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Vision</label>
        <div class="col-sm-10">
            {!!Form::text('vision', null,['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Mision</label>
        <div class="col-sm-10">
            {!!Form::text('mision', null,['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Imagen Slider</label>
        <div class="col-sm-10">
            {!!Form::file('imagen_slider',['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>