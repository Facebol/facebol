<div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
      <div class="modal-content">
        <div class="modal-header d-block shadow-2dp no-pb">
          <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="zmdi zmdi-close"></i>
            </span>
          </button>
          <div class="modal-title text-center">
            <span class="ms-logo ms-logo-white ms-logo-sm mr-1">F</span>
            <h3 class="no-m ms-site-title">ace
              <span>Bol</span>
            </h3>
          </div>
          <div class="modal-header-tabs">
            <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
              <li class="nav-item" role="presentation">
                <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple">
                  <i class="zmdi zmdi-account"></i> Entrar</a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                  <i class="zmdi zmdi-account-add"></i> Registrar</a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                  <i class="zmdi zmdi-key"></i> Olvide mi contraseña</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-body">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                {!!Form::open(['route'=>'log','method'=>'POST'])!!}
                <fieldset>
                  <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-account"></i>
                      </span>
                      <label class="control-label" for="ms-form-user">Correo</label>
                      {!!Form::email('email',null,['id'=>'ms-form-user','class'=>'form-control','required'])!!}
                  </div>
                  <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                      </span>
                      <label class="control-label" for="ms-form-pass">Contraseña</label>
                      {!!Form::password('password',['id'=>'ms-form-pass','class'=>'form-control'])!!}
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-6">
                      <div class="form-group no-mt">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Recuerdame </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      {!!Form::submit('Entrar',['class'=>'btn btn-raised btn-primary pull-right'])!!}
                    </div>
                  </div>
                </fieldset>
              {!!Form::close()!!}
            </div>
            <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
              {{Form::open(['route'=>'preregistro.store','method'=>'POST','files'=>TRUE])}}
                <fieldset>
                  <div class="form-group label-floating {{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <div class="input-group {{ $errors->has('nombre') ? ' text-danger' : '' }}">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-account"></i>
                      </span>
                      <label class="control-label" for="ms-form-user-r">Nombres</label>
                      {{Form::text('nombre',null,['class'=>'form-control','id'=>'ms-form-user-r','autofocus','required'])}}         
                    </div>
                      @if ($errors->has('nombre'))
                      <span class="help-block">
                          <strong>{{ $errors->first('nombre') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="form-group label-floating{{ $errors->has('apellido') ? ' has-error' : '' }}">
                    <div class="input-group {{ $errors->has('apellido') ? ' text-danger' : '' }}">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-account"></i>
                      </span>
                      <label class="control-label" for="ms-form-apellido-r">Apellidos</label>
                      {{Form::text('apellido',null,['class'=>'form-control','id'=>'ms-form-apellido-r','autofocus','required'])}}                                
                    </div>
                      @if ($errors->has('apellido'))
                      <span class="help-block">
                          <strong>{{ $errors->first('apellido') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group {{ $errors->has('email') ? ' text-danger' : '' }}">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-email"></i>
                      </span>
                      <label class="control-label" for="ms-form-apellido-r">Correo</label>
                      {{Form::email('email',null,['class'=>'form-control','id'=>'ms-form-apellido-r','autofocus','required'])}}                                
                    </div>
                      @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="form-group label-floating{{ $errors->has('celular') ? ' has-error' : '' }}">
                    <div class="input-group {{ $errors->has('celular') ? ' text-danger' : '' }}">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-phone"></i>
                      </span>
                      <label class="control-label" for="ms-form-apellido-r">Celular</label>
                      {{Form::number('celular',null,['class'=>'form-control','id'=>'ms-form-apellido-r','autofocus','required'])}}                                
                    </div>
                      @if ($errors->has('celular'))
                      <span class="help-block">
                          <strong>{{ $errors->first('celular') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="form-group label-floating{{ $errors->has('imagen') ? ' has-error' : '' }}">
                    <div class="input-group {{ $errors->has('imagen') ? ' text-danger' : '' }}">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-file"></i>
                      </span>
                      <label class="control-label" for="ms-form-apellido-r">Imagen de Recibo (Opcional)</label>
                      {{Form::file('imagen',['class'=>'form-control','id'=>'ms-form-apellido-r','autofocus'])}}                                
                    </div>
                      @if ($errors->has('imagen'))
                      <span class="help-block">
                          <strong>{{ $errors->first('imagen') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="form-group label-floating{{ $errors->has('codigo') ? ' has-error' : '' }}">
                    <div class="input-group {{ $errors->has('codigo') ? ' text-danger' : '' }}">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                      </span>
                      <label class="control-label" for="ms-form-apellido-r">Codigo de Usuario (Opcional)</label>
                      {{Form::text('codigo',null,['class'=>'form-control','id'=>'ms-form-apellido-r','autofocus'])}}                                
                    </div>
                      @if ($errors->has('codigo'))
                      <span class="help-block">
                          <strong>{{ $errors->first('codigo') }}</strong>
                      </span>
                      @endif
                  </div>
                  {{Form::submit('Registrar Ahora',['class'=>'btn btn-raised btn-block btn-primary'])}}
                </fieldset>
              {{Form::close()}}
            </div>
            <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
              {!!Form::open(['route'=>'reset','method'=>'POST'])!!}
              <fieldset>
                <div class="form-group label-floating">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-email"></i>
                    </span>
                    <label class="control-label" for="ms-form-email-re">Correo</label>
                    {!!Form::email('email',null,['id'=>'ms-form-email-re','class'=>'form-control'])!!}
                </div>
                    {!!Form::submit('Restablecer',['class'=>'btn btn-raised btn-block btn-primary'])!!}
              </fieldset>
              {!!Form::close()!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>