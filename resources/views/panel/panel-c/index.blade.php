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
        @include('panel.parts.menu.menu-c')
            <section id="main-content">
                <section class="wrapper">
                     <div class="row">
           

                    <div class="col-lg-9 main-chart">
                  	<div class="row mt">
                        <div class="border-head">
                            <h3>Para este mes</h3>
                        </div>
                  		<div class="col-md-3 col-sm-3 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3>+48</h3>
                  			</div>
					  			<p>Monto1.</p>
                  		</div>
                  		<div class="col-md-3 col-sm-3 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3>23</h3>
                  			</div>
					  			<p>Monto2.</p>
                  		</div>
                  		<div class="col-md-3 col-sm-3 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+10</h3>
                  			</div>
					  			<p>Monto3</p>
                  		</div>
                  		<div class="col-md-3 col-sm-3 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>Total.</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                    @include('panel.parts.calendar')
                    </div>
                </section>
            </section>
            @include('panel.parts.footer')
            
        </section>

        @include('panel.styles.js')

    </body>

</html>
