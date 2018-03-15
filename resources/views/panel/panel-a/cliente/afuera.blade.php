  <!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Logistica</title>

        @include('panel.styles.css')
         <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhozo5JLLY2SaV389PvZj3VPH852TeBp0&callback=initMap">
    </script>
    </head>

    <body onload="localizar()">
    <div class="container " style="margin-top:15px;">
            <div class="jumbotron">
                <h1>Gracias!!!! Eso es todo</h1>
                <p>Tus datos estan registrados y validados</p> 
            </div>
    </div>
        @include('panel.styles.js')

    </body>

</html>
