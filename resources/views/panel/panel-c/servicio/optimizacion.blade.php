  <!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Logistica</title>

        @include('panel.styles.css')
         <style>
      #googleMap {
        height: 400px;
        width: 100%;
       }
    </style>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADE2Oqe2j4XqNusBcF2Fx5u3am-ceID2g">
    </script>
    </head>
    <body>
     @include('panel.parts.header')
      <section id="container" >
        @include('panel.parts.menu.menu-c')
        <section id="main-content">
            <div class="container">
             <section class="wrapper">
                     <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
      				<div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
      				    <div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Datos del servicio</h4>
							<div class="alert alert-success"><b>Ubicacion Origen : </b>{{$posts_auto->origin_addresses[0]}}</div>
                            <div class="alert alert-success"><b>Ubicacion Destino : </b>{{$posts_auto->destination_addresses[0]}}</div>
                            <div class="alert alert-success"><b>Distancia : </b>{{$posts_auto->rows[0]->elements[0]->distance->text}} o {{$posts_auto->rows[0]->elements[0]->distance->value}}m</div>
      				        <div class="alert alert-success"><b>Duracion de recorrido en Automovil : </b>{{$posts_auto->rows[0]->elements[0]->duration->text}} o {{$posts_auto->rows[0]->elements[0]->duration->value}}s</div>
                      </div><!-- /showback -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
      				    <div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Datos del servicio</h4>
                            <div class="alert alert-success"><b>Duracion de recorrido Caminando : </b>{{$posts_caminando->rows[0]->elements[0]->duration->text}} o {{$posts_caminando->rows[0]->elements[0]->duration->value}}s</div>
                            <div class="alert alert-info"><b>Nombre del Destinatario : </b>{{$servicio->name}} {{$servicio->lastname}}</div>
                            <div class="alert alert-info"><b>Celular : </b>{{$servicio->phone}}</div>
                            <div class="alert alert-info"><b>Fecha de Entrega : </b>{{$servicio->dateE}}</div>
                      </div><!-- /showback -->
                    </div>
                    </div>
                    <div id="googleMap"  style="margin-bottom:30px;"></div>
                </div>
             </div>
             </div>
        </section>
        </section>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type='text/javascript'>
     navigator.geolocation.watchPosition(ok,error);//posicionamiento constate
          //  navigator.geolocation.getCurrentPosition(ok,error); //posimiento statico
            var divMapa = document.getElementById('googleMap');
            //JQUERRY var divMapa = $('#mapa');
            function error()
            {
                divMapa.innerHTML='Huboo un problema solicitando los datos';
            }
            //funcion de acceso
            function ok( respuesta )
            {   
                //creamos variables para encontrar la lon lan
                var lat =respuesta.coords.latitude;
                var lon =respuesta.coords.longitude;

               //creamos una variable de latitud y longitud con google maps      
                var glatlon = new google.maps.LatLng(lat,lon);
                var objConfig=
                {
                    zoom:17,
                    center:glatlon
                }
                
                var gMapa = new google.maps.Map(divMapa,objConfig);

                //marcadores

                var objConfigMarker=
                {
                    position:glatlon,
                    animation:google.maps.Animation.DROP,
                    map: gMapa,
                    title: "Usted esta Aqui",              
                }
                var gMarker= new google.maps.Marker(objConfigMarker);
                var lat2 ={{$servicio->lat}};
                var lon2 ={{$servicio->lon}};
                var glatlon2 = new google.maps.LatLng(lat2,lon2);
                var objConfigMarker2=
                {
                    position:glatlon2,
                    animation:google.maps.Animation.DROP,
                    map: gMapa,
                    title: "Destino",              
                }
                var gMarker= new google.maps.Marker(objConfigMarker2);
                var objConfigDR ={
                  map: gMapa,
                 // suppressMakers:true
                
                }
                 
               
                var objConfigDS = {
                    origin: glatlon,
                    destination: glatlon2,
                    travelMode:google.maps.TravelMode.DRIVING
                }
                var ds = new google.maps.DirectionsService(); //obtener coordenadas
                var dr = new google.maps.DirectionsRenderer(objConfigDR); //traduce coordenadas a la ruta visuble
                ds.route(objConfigDS,fnRutear);
                function fnRutear(resultados,status)
                //mostramos la linea entre A y B
                {
                    if(status == 'OK')
                    {
                        dr.setDirections(resultados);
                    }else
                    {
                        alert('Error'+status);
                    }
                }
            }
    </script>
    </script>
    </body>

</html>
