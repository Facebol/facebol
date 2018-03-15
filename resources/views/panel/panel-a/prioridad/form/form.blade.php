    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            {!!Form::text('name', null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Precio</label>
        <div class="col-sm-10">
            {!!Form::number('price', null,['class' => 'form-control round-form','step'=>'0.01'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>