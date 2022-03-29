@extends('layouts.app')

<!-- body -->
@section('content')

    <div class="advanced-form-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline11-list mg-tb-30">
                        <div class="sparkline11-hd">
                            <div class="main-sparkline11-hd">
                                <h1>Selectionner le dosiers</h1>
                            </div>
                        </div>
                        <div class="sparkline11-graph">
                            <div class="input-knob-dial-wrap">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="chosen-select-single mg-b-20">
                                            <label></label>
                                            <select class="select2_demo_3 form-control">
                                                <option>Dossiers</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Multi Upload Start-->
    <div class="multi-uploaded-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="dropzone-pro">
                        <div id="dropzone">
                            <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo-upload">
                                <div class="dz-message needsclick download-custom">
                                    <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                    <h2>Drop files here or click to upload.</h2>
                                    <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Multi Upload End-->

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
    <!-- touchspin JS
		============================================ -->
    <script src="{{ asset('assets/js/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin/touchspin-active.js') }}"></script>
    <!-- colorpicker JS
		============================================ -->
    <script src="{{ asset('assets/js/colorpicker/jquery.spectrum.min.js') }}"></script>
    <script src="{{ asset('assets/js/colorpicker/color-picker-active.js') }}"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="{{ asset('assets/js/datapicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datapicker/datepicker-active.js') }}"></script>
    <!-- input-mask JS
		============================================ -->
    <script src="{{ asset('assets/js/input-mask/jasny-bootstrap.min.js') }}"></script>
    <!-- chosen JS
		============================================ -->
    <script src="{{ asset('assets/js/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/chosen/chosen-active.js') }}"></script>
    <!-- select2 JS
		============================================ -->
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-active.js') }}"></script>
    <!-- ionRangeSlider JS
		============================================ -->
    <script src="{{ asset('assets/js/ionRangeSlider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/ionRangeSlider/ion.rangeSlider.active.js') }}"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="{{ asset('assets/js/rangle-slider/jquery-ui-1.10.4.custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangle-slider/jquery-ui-touch-punch.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangle-slider/rangle-active.js') }}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('assets/js/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/js/knob/knob-active.js') }}"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
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





//////////////////////////////////////////////////////////////////////////////////////////////






@extends('layouts.app')

<!-- body -->
@section('content')

    <!-- Multi Upload Start-->
    <div class="multi-uploaded-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- form_start(form) -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="sparkline11-list mg-tb-30">
                                    <div class="sparkline11-hd">
                                        <div class="main-sparkline11-hd">
                                            <h1>Selectionnez le dosier</h1>
                                        </div>
                                    </div>
                                    <div class="sparkline11-graph">
                                        <div class="input-knob-dial-wrap">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="chosen-select-single mg-b-20">
                                                        <label></label>
                                                        <select class="select2_demo_3 form-control" name="idDossier">
                                                        
                                                            <option value="  Dossier.id  ">  Dossier.titreDossier  </option>
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropzone-pro">
                            <div id="dropzone">
                                <div class="dz-message needsclick download-custom">
                                    <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                    <h2>Selectionnez vos fichiers...</h2>
                                    <!-- form_widget(form) -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="login-btn-inner">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <div class="login-horizental cancel-wp pull-left">
                                            <button class="btn btn-danger" type="reset">Annuler</button>
                                            <button class="btn btn-primary" type="submit">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- form_end(form) -->
                </div>
            </div>
        </div>
    </div>
    <!-- Multi Upload End-->

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
    <!-- touchspin JS
		============================================ -->
    <script src="{{ asset('assets/js/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin/touchspin-active.js') }}"></script>
    <!-- colorpicker JS
		============================================ -->
    <script src="{{ asset('assets/js/colorpicker/jquery.spectrum.min.js') }}"></script>
    <script src="{{ asset('assets/js/colorpicker/color-picker-active.js') }}"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="{{ asset('assets/js/datapicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datapicker/datepicker-active.js') }}"></script>
    <!-- input-mask JS
		============================================ -->
    <script src="{{ asset('assets/js/input-mask/jasny-bootstrap.min.js') }}"></script>
    <!-- chosen JS
		============================================ -->
    <script src="{{ asset('assets/js/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/chosen/chosen-active.js') }}"></script>
    <!-- select2 JS
		============================================ -->
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-active.js') }}"></script>
    <!-- ionRangeSlider JS
		============================================ -->
    <script src="{{ asset('assets/js/ionRangeSlider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/ionRangeSlider/ion.rangeSlider.active.js') }}"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="{{ asset('assets/js/rangle-slider/jquery-ui-1.10.4.custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangle-slider/jquery-ui-touch-punch.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangle-slider/rangle-active.js') }}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('assets/js/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/js/knob/knob-active.js') }}"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
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