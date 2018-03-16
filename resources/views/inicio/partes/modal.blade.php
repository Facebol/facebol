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
              <form autocomplete="off">
                <fieldset>
                  <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-account"></i>
                      </span>
                      <label class="control-label" for="ms-form-user">Email</label>
                      <input type="text" id="ms-form-user" class="form-control"> </div>
                  </div>
                  <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                      </span>
                      <label class="control-label" for="ms-form-pass">Contraseña</label>
                      <input type="password" id="ms-form-pass" class="form-control"> </div>
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
                      <button class="btn btn-raised btn-primary pull-right">Login</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
              <form>
                <fieldset>
                  <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-account"></i>
                      </span>
                      <label class="control-label" for="ms-form-user-r">Username</label>
                      <input type="text" id="ms-form-user-r" class="form-control"> </div>
                  </div>
                  <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-email"></i>
                      </span>
                      <label class="control-label" for="ms-form-email-r">Email</label>
                      <input type="email" id="ms-form-email-r" class="form-control"> </div>
                  </div>
                  <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                      </span>
                      <label class="control-label" for="ms-form-pass-r">Password</label>
                      <input type="password" id="ms-form-pass-r" class="form-control"> </div>
                  </div>
                  <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                      </span>
                      <label class="control-label" for="ms-form-pass-rn">Re-type Password</label>
                      <input type="password" id="ms-form-pass-rn" class="form-control"> </div>
                  </div>
                  <button class="btn btn-raised btn-block btn-primary">Register Now</button>
                </fieldset>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
              <fieldset>
                <div class="form-group label-floating">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-email"></i>
                    </span>
                    <label class="control-label" for="ms-form-email-re">Email</label>
                    <input type="email" id="ms-form-email-re" class="form-control"> </div>
                </div>
                <button class="btn btn-raised btn-block btn-primary">Send Password</button>
              </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>