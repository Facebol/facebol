
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.sparkline.js')}}"></script>


    <!--common script for all pages-->
    <script src="{{asset('js/common-scripts.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('js/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gritter-conf.js')}}"></script>

    <!--script for this page-->
    <script src="{{asset('js/sparkline-chart.js')}}"></script>    
	<script src="{{asset('js/zabuto_calendar.js')}}"></script>	
          
    <script type="application/javascript">
        $(document).ready(function () {
            $("#my-calendar").zabuto_calendar({
                language: "es",
            });
        });
    </script>
  
	@if(Session::has('title-panel'))
	<script type="text/javascript">
        $(document).ready(function () {
       var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: '{{Session::get('title-panel')}}',
            // (string | mandatory) the text inside the notification
            text: '{{Session::get('text-panel')}}',
            // (string | optional) the image to display on the left
            image: '../{{Session::get('img-panel')}}',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: '5000',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });
            
        return false;
        });
	</script>
    @endif
