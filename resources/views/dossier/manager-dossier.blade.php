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
                                    Ajouter une pièce
                                </a>
                            </div>

                            <div class="dropdown custonfile">
                                <a class="btn btn-info btn-block" href=" {{ route('s_pieces',['dossiers_id'=> $dossiers[0]->id]) }}">
                                    Recherche
                                </a>
                            </div>
                            
                            <div class="dropdown custonfile">
                                <a class="btn btn-success btn-block" href=" {{ route('r_dossiers',['id'=> $dossiers[0]->id]) }} ">
                                    Cloturer le dossier
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="hpanel responsive-mg-b-10">
                        <div class="panel-body">
                            <ul class="h-list m-t">
                                <!--<li class="active"><a href="#"><i class="fa fa-folder"></i> Files</a></li>-->
                                <li><a href="{{ route('foder_share', ['dossiers_id'=> $dossiers[0]->id]) }}"><i class="fa fa-user text-info"></i> Partager avec un collegue</a></li>
                                <li><a href="#"><i class="fa fa-clock-o text-success"></i> Recent</a></li>
                                <!--<li><a href="#"><i class="fa fa-star text-warning"></i> Starred</a></li>-->
                                <li><a href="{{ route('folder_corbeille', ['dossiers_id'=> $dossiers[0]->id]) }}"><i class="fa fa-trash text-danger"></i> Corbeille</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="hpanel responsive-mg-b-30">
                        <div class="panel-body file-manager-usac">
                            <div class="">
                                <h4>Detail du Dossier</h4>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Nom</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->nomClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Prenom</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->prenomClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Genre</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->sexeClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Etat civile</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->etatCivileClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Adresse</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->adresseClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Raison Soc</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->raisonSocialClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">F-juridique</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->formeJuridiqueClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Siege Soc</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->siegeSocialeClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Nationalite</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->nationaliteClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">profession</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->professionClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">R-Legale</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->repreneurLegalClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Numero</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->numeroClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Telephone</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->telephoneClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Email</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->emailClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Numero RC5</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->numeroRC5Client }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">D-juridiction</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->dateJuridictionClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">D-deroule</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->dateDeroulementProcedureClient }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Nu-Dossier</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->numeroDossier }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Da-creation</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->dateOuvertureDossier }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Ref-Dossier</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->referenceDossier }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Carpa</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->carpaDossier }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Titre-dossier</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->titreDossier }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Statut</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->statutDossier }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Categories</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->nomCategorie }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Na-plainte</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->naturePlainte }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Desc-plainte</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->descriptionsPlainte }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Avocat</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->nomPersonnel }} {{ $dossiers[0]->prenomPersonnel }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Mnt-creation </label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        {{ $dossiers[0]->montantComptabilite }} .Gnf
                                    </div>
                                </div>
                                
                            </div>
                                <!--<p>Lorem ipsum dolor sit amet of, consectetur adipiscing elit pro.</p>-->
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
                                                <li><a href="#">Corbeille</a></li>
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