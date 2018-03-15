<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
	<div style="
		max-width: 330px;
		margin: 50px auto 0;
		background: #F1F1F1;
		border-radius: 15px;
		-webkit-border-radius: 15px;
	">
		<div style="background-color:#0F1419; width: 100px; height: 50px; float:  " >
			<h1 style="
				margin: 0;
				padding: 25px 20px;
				text-align: center;
				background: #445366;
				border-radius: 15px 15px 0 0;
				-webkit-border-radius: 15px 15px 0 0;
				color: #fff;
				font-size: 20px;
				text-transform: uppercase;
				font-weight: 300;
			">{{config('app.name')}}</h1>
		</div>
		<div style="padding: 20px;">
			<div style="border-bottom: 1px solid #eff2f7; padding-bottom: 15px; margin-bottom: 15px;">
		    <h2 style="color: black;">Hola {{ $name }}, gracias por registrarte un servicio <strong>Logistica</strong> !</h2>
		    </div>
		    <div style="border-bottom: 1px solid #eff2f7; padding-bottom: 15px; margin-bottom: 15px;">
		    <p>Por favor verfica tu direccion todos estos datos solo seran usados con fines laborales.</p>
		    </div>
		    <div style="border-bottom: 1px solid #eff2f7; padding-bottom: 15px; margin-bottom: 15px;">
		    <p>Para ello simplemente debes hacer click en el siguiente enlace:</p>
	    	</div>
	    	<div style="border-bottom: 1px solid #eff2f7; padding-bottom: 15px; margin-bottom: 15px;">
	    	<a style="  display: inline-block;
				  padding: 6px 12px;
				  margin-bottom: 0;
				  font-size: 14px;
				  font-weight: normal;
				  line-height: 1.42857143;
				  text-align: center;
				  white-space: nowrap;
				  vertical-align: middle;
				  cursor: pointer;
				  -webkit-user-select: none;
				     -moz-user-select: none;
				      -ms-user-select: none;
				          user-select: none;
				  background-image: none;
				  border: 1px solid transparent;
				  border-radius: 4px;  color: #fff;
				  background-color: #445366;
				  border-color: #48bcb4;  
				  display: block; 
				  width: 90%; 
				  margin-top: 5px;
				  text-decoration: none;" 
				  href="{{ url('panel/servicio/direccion/' . $codigo) }}">Confirmar Direccion</a>
	    	</div>
	    </div>
	 </div>
</body>
</html>