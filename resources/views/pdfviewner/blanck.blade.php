@extends('layouts.app')

<!-- body -->
@section('content')


<div class="file-manager-area mg-tb-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
        <div class="hpanel responsive-mg-b-30">
          <div class="panel-body">
              <a class="btn btn-info btn-block" href=" {{ route('n_pieces') }}">
                Retour
              </a>
            </br>
            <h4>Pieces</h4>
            <ul class="h-list m-t">
              @foreach($pieces as $piece)
              <li class="active"><a href="{{ route('lecture_piece', ['dossiers_id'=> $piece->dossiers_id, 'pieces_id'=> $piece->id]) }}"><i class="fa fa-folder"></i> {{ $piece->nomPiece }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="hpanel responsive-mg-b-30">
          <div class="panel-body file-manager-usac">
                                
          </div>
        </div>
      </div>

      <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
        <div class="pdf-viewer-area mg-tb-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    </div>
                    <div class="">
                        <div class="pdf-single-pro">
                            <a class="media" href=" {{ asset('uploads/'.$reference.'/'.$file->nomPiece.'') }} "></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    </div>
                </div>
            </div>
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
    <!-- data table JS
		============================================ -->
    <script src="{{ asset('assets/js/chart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/js/peity/peity-active.js') }}"></script>
    <!-- pdf JS
		============================================ -->
    <script src=" {{ asset('assets/js/pdf/jquery.media.js') }} "></script>
    <script src=" {{ asset('assets/js/pdf/pdf-active.js') }} "></script>
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