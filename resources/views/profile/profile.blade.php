@extends('layouts.app')

<!-- body -->
@section('content')

    <div class="container">

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


        <div class="row">
            <br>
            <center>
                <span id="" class="alert alert-info"><i class="fa fa-info"></i> Remplissez le champ mot de passe et confirmer si vous souhaiter modifier votre mot de passe</span>
            </center>
        </div>

        

        <h2>Mon Profile</h2>
        <hr>

        <div class="row">
            <form role="form" action=" {{ route('m_profile') }} " method="POST">
                @csrf
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="{{ asset('uploads/Personnel/photo/'.$user->photoPersonnel.'') }}" class="avatar img-circle" alt="avatar">
                        <h6>Charger la photo..</h6>
                        
                        <input type="file" name="photoPersonnel class="form-control">
                    </div>
                </div>
            
                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    
                    <h3></h3>
                    
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Nom:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" name="nomPersonnel" value="{{ $user->nomPersonnel }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Prenom:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" name="prenomPersonnel" value="{{ $user->prenomPersonnel }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Genre:</label>
                            <div class="col-lg-8">
                                <div class="form-select-list">
                                    <select class="form-control" name="sexePersonnel">
                                        <option value="Masculin" <?php if($user->sexePersonnel == "Masculin") echo 'selected'; ?> >Masculin</option>
                                        <option value="Feminin" <?php if($user->sexePersonnel == "Feminin") echo 'selected'; ?> >Feminin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Telephone:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" name="telephonePersonnel" value="{{ $user->telephonePersonnel }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Adresse:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" name="adressePersonnel" value="{{ $user->adressePersonnel }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <!--
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" name="email" value=" personnel.email " readonly>
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mot de passe:</label>
                            <div class="col-md-8">
                            <input class="form-control" type="password" placeholder="mot de passe" value="{{ $user->password }}" name="password" id="fPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Confirme Mot de passe:</label>
                            <div class="col-md-8">
                            <input class="form-control" type="password" name="password_confirmation" value="{{ $user->password }}" placeholder="confirmer le mot de passe " id="sPassword">
                            <span id="messageErreur" style="color:red;">Confirmation incorrect</span>
                            <span id="messageValide" style="color:green;">Confirmation correct</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                            <input type="submit" class="btn btn-primary" value="Modifier">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Annuler">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>

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


        <!-- ============= DEBUT DU CODE DE COMPARAISON DE MOT DE PASSE ============ -->
          
		<script type="text/javascript">
			jQuery(function($) {

                    var passValideContenue = $('#sPassword').val();
                    var passConfirmContenue = $('#fPassword').val();
                    $('#fPassword').keydown(function(){
                        if(passConfirmContenue =='')
                        {
                            $('#messageErreur').hide();
                            $('#messageValide').hide();
                        }
                    });

                    $('#sPassword').keydown(function(){
                        if(passValideContenue =='')
                        {
                            $('#messageErreur').hide();
                            $('#messageValide').hide();
                        }
                    });
                    $('#messageErreur').hide();
                    $('#messageValide').hide();
                    // verification de la sasaisie du mot de passe de confirmation
                    $('#sPassword').keyup(function(){
                    $('#messageErreur').show();
                    var passValide = $('#fPassword').val();
                    if(passValide !='')
                    {
                        var passCompare = $('#sPassword').val();
                        if(passValide == passCompare)
                        {
                            $('#messageErreur').hide();
                            $('#messageValide').show();
                        }
                        else
                        {
                            $('#messageErreur').show();
                            $('#messageValide').hide();
                        }
                    }
                });
                // Verification du premier mot de passe saisie
                    $('#fPassword').keyup(function(){
                    var passValide = $('#sPassword').val();
                    if(passValide !='')
                    {
                        var passCompare = $('#fPassword').val();
                        if(passValide == passCompare)
                        {
                            $('#messageErreur').hide();
                            $('#messageValide').show();
                        }
                        else
                        {
                            $('#messageErreur').show();
                            $('#messageValide').hide();
                        }
                    }
                });
			});
		</script>
        <!-- ============= FIN DU CODE DE COMPARAISON DE MOT DE PASSE ============ -->
        


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
    <!-- c3 JS
		============================================ -->
    <script src="{{ asset('assets/js/c3-charts/d3.min.js') }}"></script>
    <script src="{{ asset('assets/js/c3-charts/c3.min.js') }}"></script>
    <script src="{{ asset('assets/js/c3-charts/c3-active.js') }}"></script>
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