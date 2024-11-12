<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DAMS_ver2</title>

        <!-- CSS -->
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href="{{ asset('elements/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/css/bootstrap-responsive.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/css/flexslider.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/css/custom-styles.css')}}" rel="stylesheet" type="text/css">

        <!-- Search Bar-->
        <link href="{{ asset('elements/frontend/searchBar/main.css')}}" rel="stylesheet" type="text/css">

        <!-- Admin Template-->
        <link href="{{ asset('elements/frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/css/sb-admin-2.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/')}}" rel="stylesheet" type="text/css">
        
        <!-- JS -->
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <link href="{{ asset('elements/backend/js/bootstrap.js')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/backend/js/jquery.prettyPhoto.js')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/backend/js/jquery.flexslider.js')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/backend/js/jquery.custom.js')}}" rel="stylesheet" type="text/css">



    </head>
    <body> 
        <div id="app"></div>
        <script src="{{ asset('js/app.js') }}"> </script>

        <!-- Search Bar-->
        <script src="{{ asset('elements/backend/js/extention/choices.js') }}"> </script>

        <!-- Admin Template-->
        <script src="{{ asset('elements/backend/js/sb-admin-2.min.js') }}"> </script>
        <script src="{{ asset('elements/backend/vendor/jquery/jquery.min.js') }}"> </script>



        <!-- <script src="{{ asset('elements/backend/') }}"> </script> -->
        <script src="{{ asset('elements/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"> </script>
        <script src="{{ asset('elements/backend/vendor/jquery-easing/jquery.easing.min.js') }}"> </script>
        <script src="{{ asset('elements/backend/js/sb-admin-2.min.js') }}"> </script>
        <script src="{{ asset('elements/backend/vendor/chart.js/Chart.min.js') }}"> </script>
        <script src="{{ asset('elements/backend/js/demo/chart-area-demo.js') }}"> </script>
        <script src="{{ asset('elements/backend/js/demo/chart-pie-demo.js') }}"> </script>
       


    </body>

    <script type="text/javascript">
        $(document).ready(function () {

            $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
            });
            $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
            });

            $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
            });
            $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
            });
            
        });

        $(window).load(function(){

            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true,
                start: function(slider){
                $('body').removeClass('loading');
                }
            });  
        });

    </script>
</html>
