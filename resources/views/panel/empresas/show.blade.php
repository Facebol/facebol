<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="myModal{{$empresas->id}}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title">Datos en detalle de la Empresa</h4>
                    </div>
                    <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-4">Codigo de Usuario :</dt>
                        <dd class="col-sm-6" disabled="">{{$empresas->usuario_id}}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Nombre de la empresa :</dt>
                        <dd class="col-sm-6" disabled="">{{$empresas->nombre}}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Ciudad :</dt>
                        <dd class="col-sm-6" disabled="">{{$empresas->ciudad_id}}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Categoria :</dt>
                        <dd class="col-sm-6" disabled="">{{$empresas->categoria_id}}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Descripcion :</dt>
                        <textarea cols="50" rows="7" disabled="">{{$empresas->descripcion}}</textarea>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Horario :</dt>
                        <dd class="col-sm-6">{{$empresas->horario}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Descuento :</dt>
                        <dd class="col-sm-6">{{$empresas->descuento}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Promocion :</dt>
                        <dd class="col-sm-6">{{$empresas->promocion}}</dd>      
                    </dl>
                     <dl class="row">
                        <dt class="col-sm-4">Telefono :</dt>
                        <dd class="col-sm-6">{{$empresas->telefono}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Email :</dt>
                        <dd class="col-sm-6">{{$empresas->email}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Facebook :</dt>
                        <dd class="col-sm-6">{{$empresas->facebook}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Pagina Web :</dt>
                        <dd class="col-sm-6">{{$empresas->web}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Direccion :</dt>
                        <dd class="col-sm-6">{{$empresas->direccion}}</dd>      
                    </dl>
                    </div>
                <div class="modal-footer">
                     <div class="form-group"> 
                    <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
                     </div>
                </div>
            </div>
        </div>  
        </div>