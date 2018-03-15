    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
      
    <script type="text/javascript" src="js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="js/gritter-conf.js"></script>
    <script>
		$.backstretch("img/bg-login.png", {speed: 500});
    </script>
    @if(Session::has('title-login'))
    <script type="text/javascript">
        $(document).ready(function () {
       var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: '{{Session::get('title-login')}}',
            // (string | mandatory) the text inside the notification
            text: '{!!Session::get('text-login')!!} ',
            // (string | optional) the image to display on the left
            image: '{!!Session::get('img-login')!!}',
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
