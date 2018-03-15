@extends('panel.login.template')
@section('content')
	<div id="login-page">
		<div class="container">
			{!!Form::open(['route'=>'log','method'=>'POST','class'=>'form-login'])!!} 
			
			<h2 class="form-login-heading">Comenzar Sesion</h2>
			<div class="login-wrap">
				{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Correo','autofocus','required'])!!}
				<br>
				{!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña','required'])!!}
				<label class="checkbox">
					<span class="pull-right">
						<a data-toggle="modal" href="login.html#myModal"> Olvidaste tu contraseña</a>
	
					</span>
				</label>
				<button class="btn btn-theme btn-block btn-round" type="submit"><i class="fa fa-lock"></i> Conectar</button>
	
			</div>
			{!!Form::close()!!}
				<!-- Modal -->
				<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Olvidaste tu Contraseña ?</h4>
							</div>
							{!!Form::open(['method'=>'POST'])!!}
							<div class="modal-body">
								<p>Coloca tu correo Electronico para que recuperes tu cuenta.</p>
								<input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
	
							</div>
							<div class="modal-footer">
								<button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
								<button class="btn btn-theme" type="button">Enviar</button>
							</div>
							{!!Form::close()!!}
						</div>
					</div>
				</div>
				<!-- modal -->
	
		  	
			
		</div>
	</div>
@stop