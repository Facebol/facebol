 <div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-detalle-{{$servicio->id}}">
		
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
					<h4 class="modal-title">Datos del Destinatario</h4>
				    </div>
                    <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-6">Nombre del destinatario :</dt>
                        <dd class="col-sm-6">{{$servicio->name}}</dd>      
                    </dl>
                    
                     <dl class="row">
                        <dt class="col-sm-6">Apellido del destinatario :</dt>
                        <dd class="col-sm-6">{{$servicio->lastname}}</dd>      
                    </dl>
                     <dl class="row">
                        <dt class="col-sm-6">Direccion del Destinatario :</dt>
                        <dd class="col-sm-6">{{$servicio->address}}</dd>      
                    </dl>
                     <dl class="row">
                        <dt class="col-sm-6">Celular del Destinatario :</dt>
                        <dd class="col-sm-6">{{$servicio->phone}}</dd>      
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