 <div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-open-{{$cliente->id}}">
		
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
					<h4 class="modal-title">Añadir Servicio</h4>
				</div>
				<div class="panel-body">
				{!!Form::open(['route'=>['crear', $cliente->id], 'class'=>'form-horizontal','method' => 'POST'])!!}
						@include('panel.panel-a.servicio.form.form')			
				</div>
				<div class="modal-footer">
					 <div class="form-group"> 
					<button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
					 {!!Form::submit('Registrar',['class'=>'btn btn-theme btn-round'])!!}
					 </div>
				</div>
				{!!Form::close()!!}
			</div>
		</div>
         
</div>