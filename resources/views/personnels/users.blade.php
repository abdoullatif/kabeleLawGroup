@extends('layouts.app')

<!-- body -->
@section('content')

        <!------------------------->
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
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
        <div class="alert alert-success">
        {{ session('success') }}
        </div> 
        @endif

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="add-product">
                            <a href="{{ route('f_personnels') }}">Ajouter un membre</a>
                        </div>
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Liste du<span class="table-project-n"> Personnel</span></h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Exporter Simple</option>
                                        <option value="all">Exporter tout</option>
                                        <option value="selected">Exporter Selectionner</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="image">Image</th>
                                        <th data-field="nomPersonnel" data-editable="true">Nom Complet</th>
                                        <th data-field="sexePersonnel" data-editable="true">sexe</th>
                                        <th data-field="statutPersonnel" data-editable="true">status</th>
                                        <th data-field="fonctionPersonnel" data-editable="true">fonction</th>
                                        <th data-field="adressePersonnel" data-editable="true">Adresse</th>
                                        <th data-field="telephonePersonnel" data-editable="true">Telephone</th>
                                        <th data-field="privillegePersonnel" data-editable="true">Privillege</th>
                                        <th data-field="email" data-editable="true">email</th>
                                        <th data-field="dateInscriptionPersonnel" data-editable="true">Date Inscription</th>
                                        <th data-field="action">Parametre</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($personnels as $personnel)
                                      <tr>
                                        <td></td>
                                        <td>image</td>
                                        <td> {{ $personnel->nomPersonnel }}  {{ $personnel->prenomPersonnel }} </td>
                                        <td> {{ $personnel->sexePersonnel }} </td>
                                        <td> {{ $personnel->statutPersonnel }} </td>
                                        <td> {{ $personnel->fonctionPersonnel }} </td>
                                        <td> {{ $personnel->adressePersonnel }} </td>
                                        <td> {{ $personnel->telephonePersonnel }} </td>
                                        <td> {{ $personnel->privillegePersonnel }} </td>
                                        <td> {{ $personnel->email }} </td>
                                        <td> {{ $personnel->dateInscriptionPersonnel }} </td>
                                        <td class="datatable-ct">
                                          <div class="row">
                                            <form method="post" action=" {{ route('m_personnels',['id'=> $personnel->id]) }} " style="display:inline-block">
                                              <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o btn-primary" aria-hidden="true"></i></button>
                                            </form>
                                            <form method="get" action=" {{ route('d_personnels',['id'=> $personnel->id]) }} " style="display:inline-block">
                                              <input type="hidden" name="_method" value="DELETE" />
                                              <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o btn-danger" aria-hidden="true"></i></button>
                                            </form>
                                          </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->

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
    <script src="{{ asset('assets/js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/tableExport.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/data-table-active.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-export.js') }}"></script>
    <!--  editable JS
		============================================ -->
    <script src="{{ asset('assets/js/editable/jquery.mockjax.js') }}"></script>
    <script src="{{ asset('assets/js/editable/mock-active.js') }}"></script>
    <script src="{{ asset('assets/js/editable/select2.js') }}"></script>
    <script src="{{ asset('assets/js/editable/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/editable/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/js/editable/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('assets/js/editable/xediable-active.js') }}"></script>
    <!-- Chart JS
		============================================ -->
    <script src="{{ asset('assets/js/chart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/js/peity/peity-active.js') }}"></script>
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