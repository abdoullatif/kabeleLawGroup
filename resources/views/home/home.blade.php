@extends('layouts.app')


@section('content')

    <!--Graphe et stastistique-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <!--<a href="index.html"><img class="main-logo" src="{{asset('assets/img/logo/logo.png')}}" alt="" /></a>-->
                </div>
            </div>
        </div>
    </div>

    <div class="header-advance-area">
        <!-- Mobile Menu start -->
        
    </div>
    <!-- custom chart start-->
    <div class="section-admin container-fluid">
        <div class="row admin text-center">


            <div class="container">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ asset('assets/img/carousel-details/banner1.jpg') }}">
                            <div class="carousel-caption">
                                <h3>KABELELAW</h3>
                                <p>Cabinet d'avocat</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/carousel-details/banner2.jpg') }}">
                            <div class="carousel-caption">
                                <h3>KABELELAW</h3>
                                <p>Cabinet d'avocat</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/carousel-details/banner3.jpg') }}">
                            <div class="carousel-caption">
                                <h3>KABELELAW</h3>
                                <p>Cabinet d'avocat</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/carousel-details/banner4.jpg') }}">
                            <div class="carousel-caption">
                                <h3>KABELELAW</h3>
                                <p>Cabinet d'avocat</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/carousel-details/banner5.jpg') }}">
                            <div class="carousel-caption">
                                <h3>KABELELAW</h3>
                                <p>Cabinet d'avocat</p>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="page-header">
                    <h1>KABELE LAW</h1>
                    <p class="lead">SOCIETE CIVILE PROFESSIONNELLE D'AVOCATS</p>
                    <p></p>
                </div>

            </div>
            
        </div>

    </div>
    

@endsection


@section('content-js')

    <!-- jquery
        ============================================ -->
    <script src="{{ asset('assets/js/vendor/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS {{ asset('assets/') }}
		============================================ -->
    

    <!-- c3 JS
		============================================ -->
    <script src="{{ asset('assets/js/c3-charts/d3.min.js') }}"></script>
    <script src="{{ asset('assets/js/c3-charts/c3.min.js') }}"></script>
    <script type="text/javascript">
        /*

        dependencies:

        //cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js
        //maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js
        //cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js

        */

        $(".carousel").swipe({

        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');

        },
        allowPageScroll:"vertical"

        });
    </script>
    <!-- tab JS
		============================================ -->
    <script src="{{ asset('assets/js/tab.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

@endsection