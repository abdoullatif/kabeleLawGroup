
    <!-- Sidebar et Content -->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{ route('home') }}"><img class="main-logo" src="{{ asset('assets/img/logo/logo.png') }}" alt="" /></a>
                <strong><img src="{{ asset('assets/img/logo/logosn.png') }}" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">

                        <li class="">
                            <a class="has-arrow" href="javascript:void()">
                                <i class="fa big-icon fa-home icon-wrap"></i>
                                <span class="mini-click-non">Acceuil</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="home" href="{{ route('home') }}"><i class="fa big-icon fa-home icon-wrap" aria-hidden="true"></i><span class="mini-sub-pro">Acceuil</span></a></li>
                                <li><a title="Stastistique" href="{{ route('state') }}"><i class="fa big-icon fa-tachometer icon-wrap" aria-hidden="true"></i><span class="mini-sub-pro">Stastistique</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-inbox sub-icon-mg"></i> <span class="mini-click-non">Plainte</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="{{ route('form_plaintes') }}"><i class="fa fa-inbox sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Creation de plaine</span></a></li>
                            </ul>
                        </li>

                        
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa big-icon fa-folder-open-o icon-wrap"></i> <span class="mini-click-non">Dossier</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href=" {{ route('n_pieces') }} "><i class="fa fa-folder sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ajout pieces</span></a></li>
                                <li><a title="Blog" href=" {{ route('v_dossier') }} "><i class="fa fa-folder-open sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Dossiers</span></a></li>
                                <li><a title="Blog" href=" {{ route('s_dossier') }} "><i class="fa fa-share-alt sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Dossiers Partager</span></a></li>
                            </ul>
                        </li>

                        
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa big-icon fa-calculator icon-wrap"></i> <span class="mini-click-non">Comptabilite</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Bar Charts" href="{{ route('v_comptabilite') }}"><i class="fa fa-file sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Comptabilite</span></a></li>
                                <li><a title="Line Charts" href="{{ route('n_comptabilite') }}"><i class="fa fa-money sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Paiement</span></a></li>
                            </ul>
                        </li>
                        

                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa big-icon fa-tags icon-wrap"></i> <span class="mini-click-non">Categories</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{ route('f_categorie') }}"><i class="fa fa-tags sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ajout</span></a></li>
                                <li><a title="Data Table" href="{{ route('view_categorie') }}"><i class="fa fa-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Categorie</span></a></li>
                                <!--<li><a title="Data Table" href="data-table.html"><i class="fa fa-th sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Role</span></a></li>-->
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-user sub-icon-mg"></i> <span class="mini-click-non">Personnel</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href=" {{ route('f_personnels')}} "><i class="fa fa-user-plus sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ajouter</span></a></li>
                                <li><a title="Data Maps" href="{{ route('view_personnels')}}"><i class="fa big-icon fa-file-text icon-wrap" aria-hidden="true"></i> <span class="mini-sub-pro">Personnels</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-cog icon-wrap"></i> <span class="mini-click-non">Parametre </span></a>
                            <ul class="submenu-angle" aria-expanded="false">   
                                <li><a title="Data Table" href=" {{ route('rolePersonnel') }} "><i class="fa fa-th sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Privillege</span></a></li>
                            </ul>
                        </li>
                        

                    </ul>
                </nav>
            </div>
        </nav>
    </div>