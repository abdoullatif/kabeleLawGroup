<!DOCTYPE html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>KABELE LAW GROUP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href=" {{ asset('assets/css/font-awesome.min.css') }}">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href=" {{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.print.min.css') }}">
        <!-- touchspin CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/touchspin/jquery.bootstrap-touchspin.min.css') }}">
        <!-- datapicker CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/datapicker/datepicker3.css') }}">

        <!-- colorpicker CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/colorpicker/colorpicker.css') }}">
        <!-- select2 CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/select2/select2.min.css') }}">
        <!-- chosen CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/chosen/bootstrap-chosen.css') }}">
        <!-- ionRangeSlider CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/ionRangeSlider/ion.rangeSlider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/ionRangeSlider/ion.rangeSlider.skinFlat.css') }}">
        <link rel="stylesheet" href=" {{ asset('assets/css/preloader/preloader-style.css') }} ">
        <!-- dropzone CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/dropzone/dropzone.css') }}">
        <!-- x-editor CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/editor/select2.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/editor/datetimepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/editor/bootstrap-editable.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/editor/x-editor-style.css') }}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-table.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-editable.css') }}">

        <!-- modals CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/modals.css') }}">
        <!-- forms CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/form/all-type-forms.css') }}">

        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <!-- modernizr JS
            ============================================ -->
        <script src=" {{asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="preloader-wrap">
        <div class="spinner"></div>
    </div>

    @include('layouts.includes.sidebar')


    <div class="all-content-wrapper">
        
        @include('layouts.includes.header')

        @yield('content')

        @include('layouts.includes.footer')

    </div>

    @yield('content-js')

    <script type="text/javascript">
        /*
        $(document).ready(function () {

            setInterval(function(){

                if("{{ auth()->check() }}" == "1") {

                    $.ajax({
                        type: "Get",
                        url: "/c_notification",
                        //data: "data",
                        dataType: "json",
                        success: function (response) {

                            var notification_html = response.nombreNotification;
                            $('.number').html(notification_html);
                            //if(response.notification[0].notify != 0){}
                            
                        }
                    });
                }
        
            }, 1000);


        });
        */
    </script>

    </body>

</html>