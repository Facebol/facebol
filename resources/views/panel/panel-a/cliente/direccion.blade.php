  <!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Logistica</title>

        @include('panel.styles.css')
         <style>
      #map_canvas {
        height: 400px;
        width: 100%;
       }
    </style>

 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADE2Oqe2j4XqNusBcF2Fx5u3am-ceID2g">
    </script>

    <body>
    <div class="container " style="margin-top:15px;">
            <div class="jumbotron">
                <h1>Verifica tu Ubicacion</h1>
                <p>Valida tu ubicacion y tu correo electronico</p>
                 {!!Form::open(['route'=>['validar',$cliente->id] ,'method'=>'POST','class'=>'formulario form-horizontal style-form','files'=>true])!!} 
                {!!Form::text('lat', null,['class' => 'form-control round-form','id'=>'lat',"style"=>"visibility:hidden"])!!}
                {!!Form::text('lon', null,['class' => 'form-control round-form','id'=>'lon',"style"=>"visibility:hidden"])!!}
                <p> {!!Form::submit('Registrar',['class'=>'btn btn-theme btn-block btn-round'])!!}</p>
                {!!Form::close()!!}
                 <div id='response'></div>  
            </div>

    <div id="map_canvas"  style="margin-bottom:30px;"></div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type='text/javascript'>
            var map = null;
var infoWindow = null;
 
function openInfoWindow(marker) {
    var markerLatLng = marker.getPosition();
    
    infoWindow.setContent([
        '<strong>La posicion del marcador es:</strong><br/>',
        markerLatLng.lat(),
        ', ',
        markerLatLng.lng(),
        '<br/>Arrástrame para actualizar la posición.'
    ].join(''));
    infoWindow.open(map, marker);
    document.getElementById('lat').value = markerLatLng.lat();
    document.getElementById('lon').value = markerLatLng.lng();
}
 
function initialize() {
    navigator.geolocation.getCurrentPosition(coordenadas);
    function coordenadas(position) {
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;
    var myLatlng = new google.maps.LatLng(lat,lon);
    var myOptions = {
      zoom: 13,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    document.getElementById('lat').value = lat;
    document.getElementById('lon').value = lon;
    map = new google.maps.Map($("#map_canvas").get(0), myOptions);
 
    infoWindow = new google.maps.InfoWindow();
 
    var marker = new google.maps.Marker({
        position: myLatlng,
        draggable: true,
        map: map,
        title:"Marcador arrastrable"
    });
        google.maps.event.addListener(marker, 'dragend', function(){ openInfoWindow(marker); });
	google.maps.event.addListener(marker, 'click', function(){ openInfoWindow(marker); });
    }
}
 
$(document).ready(function() {
    initialize();
});        </script>
    </body>

</html>
