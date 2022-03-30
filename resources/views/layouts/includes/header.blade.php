        
        <!-- NavBar et Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{ asset('assets/img/logo/logo.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">

                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item"><a href="{{ route('u_notification') }}" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i>
                                                <span class = "badge badge-pill badge-warnig" style = "vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;" class="number">
                                                        {{ count(auth()->user()->notifications) }}
                                                    </font>
                                                </span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            @foreach(auth()->user()->notifications as $notification) <!--unreadNotifications-->
                                                            <li>
                                                                <a href="{{ route('v_dossier', ['id'=> 1]) }}">
                                                                    <div class="message-content">
                                                                        <h5>{{ $notification->data['data']['titre'] }}</h5>
                                                                        <span class="message-date">Date d'ouverture : {{ $notification->data['data']['date'] }}</span>
                                                                        <p>Titre : {{ $notification->data['data']['titreDossier'] }}</p>
                                                                        <p>Avocat : {{ $notification->data['data']['user'] }}</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">Voir toutes les notifications</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name">
                                                            {{ auth()->user()->nomPersonnel }} {{ auth()->user()->prenomPersonnel }}
                                                        </span>
                                                        <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href=" {{ route('f_profile', ['user_id'=> auth()->user()->id]) }} "><span class="fa fa-user author-log-ic"></span>Mon Profile</a>
                                                        </li>
                                                        <li><a href="{{ route('auth.logout') }}"><span class="fa fa-lock author-log-ic"></span>Se deconnecter</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Acceuil <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="{{ route('home') }}">Acceuil</a></li>
                                                <li><a href="{{ route('state') }}">Statistique</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Plainte <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="{{ route('view_plaintes') }}">Creation de plainte</a>
                                                </li>
                                            
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Personnel <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="{{ route('view_personnels')}}">Ajouter</a>
                                                </li>
                                                <li><a href="{{ route('i_personnels')}}">Liste de personnel</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#"> Dossier <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="{{ route('n_pieces') }} ">Ajouter des pieces</a></li>
                                                <li><a href="{{ route('i_plaintes') }}">Dossiers</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Comptabilite <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="{{ route('v_comptabilite') }}">Compte client</a>
                                                </li>
                                                <li><a href="{{ route('n_comptabilite') }}">Enregistrer des Frais</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Utilisateur <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                
                                                <li><a href=" {{ route('rolePersonnel') }} ">Role</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>