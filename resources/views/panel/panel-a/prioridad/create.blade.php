<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Logistica</title>

        @include('panel.styles.css')

    </head>

    <body>

        @include('panel.parts.header')

        <section id="container" >
       @include('panel.parts.menu.menu-a')
            <section id="main-content">
                <section class="wrapper">
                     <div class="row">
                        <div class="row mt">
                            <div class="col-lg-9">
                            <div class="form-panel wrap">
                                {!!Form::open(['route'=>'prioridad.store','method'=>'POST','class'=>'formulario form-horizontal style-form','files'=>true])!!} 
                                      
                                <h3 class="text-center"><i class="fa fa-user"></i> Registro de Usuario</h3>
                                    @include('panel.panel-a.prioridad.form.form')
                                    <div class="form-group">       
                                        <div class="col-sm-12">                
                                            {!!Form::submit('Registrar',['class'=>'btn btn-theme btn-block btn-round'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group">       
                                        <div class="col-sm-12 center-block">                
                                            <a href="{{route('start-a')}}" class="btn btn-primary btn-block btn-round " ><i class="fa fa-chevron-circle-left"></i> Regresar</a>
                                        </div>
                                    </div>
                                {!!Form::close()!!}
                                
                            </div>
                             
                            </div><!-- col-lg-12-->      	
                           @include('panel.parts.calendar')
                        </div><!-- /row -->
                    </div>
                </section>
            </section>
            @include('panel.parts.footer')
            
        </section>

        @include('panel.styles.js')

    </body>

</html>
