@extends('layouts.app')

<!-- body -->
@section('content')

    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success text-center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <div class="file-manager-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                    
                    <div class="hpanel responsive-mg-b-30">
                        <div class="panel-body">
                            <div class="dropdown custonfile">
                                <a class="btn btn-info btn-block" href=" {{ route('n_pieces') }}">
                                    Vider la corbeille
                                </a>
                            </div>

                        </div>
                    </div>
                    
                    
                </div>
                <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
                
                    <div class="row">
                        @foreach($pieces as $piece)
                        <div class="col-md-3">
                            <div class="hpanel mt-b-30">
                                <div class="panel-body file-body file-cs-ctn">
                                    <a href=" {{ route('lecture_piece', ['dossiers_id'=> $dossiers[0]->id, 'pieces_id'=> $piece->id]) }} ">
                                        <i class="fa fa-file-pdf-o text-info"></i>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <div class="dropdown">
                                        <a href=" {{ route('lecture_piece', ['dossiers_id'=> $dossiers[0]->id, 'pieces_id'=> $piece->id]) }} "> {{ substr($piece->nomPiece, 0, 14) }} </a> 
                                        <li class="dropdown" style="list-style: none; display: inline-block">
                                            <a class="glyphicon glyphicon-triangle-bottom dropdown-toggle" data-toggle="dropdown" href="#"></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Restaurer</a></li>
                                                <li><a href="#">Supprimer</a></li>
                                                <!--<li><a href="#"></a></li>-->
                                            </ul>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                
                </div>
            </div>
        </div>
    </div>

@endsection

<!-- js -->
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


    <!-- morrisjs JS
        ============================================ -->
    <script src="{{ asset('assets/js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris-active.js') }}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{ asset('assets/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="{{ asset('assets/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar-active.js') }}"></script>

    <!-- tab JS
		============================================ -->
    <script src="{{ asset('assets/js/tab.js') }}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ asset('assets/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/js/icheck/icheck-active.js') }}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

@endsection