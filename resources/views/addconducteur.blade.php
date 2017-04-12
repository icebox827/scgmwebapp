@extends('layouts.app')
@section('pagetitle')
    Registre
@endsection
@section('content')

    <div class="content">
        <div class="container">
            <form class="form-horizontal" role="form" method="post" action="{{ route("conducteur.save") }}"
                  data-parsley-validate novalidate enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4>Nouveau Conducteur</h4>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="file-4" class="control-label">Photo*</label>
                                        <input id="image" class="form-control filestyle " type="file" name="picture" >
                            </div>
                            <div class="form-group">

                                <label for="nom">Nom*</label>

                                    <input id="name" class="form-control" name="name" type="text" value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="prenom">Prenom*</label>
                                <input  id ="lastname" class="form-control" name="prenom" type="text" value="{{ old('prenom') }}" required>
                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="emailAddress">Date de Naissance*</label>


                                        <div class="input-group">
                                            <input type="text" name="birthdate" class="form-control"
                                                   placeholder="mm/dd/yyyy"
                                                   id="datepicker-autoclose"
                                                   value="{{ old('birthdate') }}" required>
                                            <span class="input-group-addon bg-custom b-0 text-white"><i
                                                        class="fa fa-calendar"></i></span>
                                        </div>
                                @if ($errors->has('birthdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="lnaissance">Lieu de Naissance*</label>
                                <input id="lnaissance" class="form-control"  name="lnaissance" type="text" value="{{ old('name') }}" required>
                                @if ($errors->has('lnaissance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lnaissance') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="sexe">Sexe*</label>
                                <select id="sexe" class="form-control select2" name="sex" required>

                                    <option {{ old('sex') == 'masculin' ? 'selected' : '' }} value="masculin">Masculin</option>
                                    <option {{ old('sex') == 'feminin' ? 'selected' : '' }} value="feminin">Feminin</option>
                                </select>
                                @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="cin">CIN*</label>
                                <input id="cin" class="form-control"  name="cin" type="text" value="{{ old('cin') }}" required>
                                @if ($errors->has('cin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cin') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="nif">NIF*</label>
                                <input id="nif" class="form-control"  name="nif" data-mask="999-999-999-9" type="text" value="{{ old('nif') }}" required>
                                @if ($errors->has('nif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nif') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="permis">Permis de Conduire*</label>
                                <input id="permis" class="form-control"  name="permis" data-mask="aa-99999-aa" type="text" value="{{ old('permis') }}" required>
                                @if ($errors->has('permis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('permis') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="file-4" class="control-label">Empreinte Index-droite*</label>
                                <input id="image" class="form-control filestyle " type="file" name="eg" >
                                @if ($errors->has('eg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eg') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="file-4" class="control-label">Empreinte Index-gauche*</label>
                                <input id="image" class="form-control filestyle " type="file" name="ed" >
                                @if ($errors->has('ed'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ed') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="tel">Matricule*</label>
                                <input id="tel" class="form-control"  name="tel" type="text" value="{{ old('matricule') }}" required>
                                @if ($errors->has('matricule'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('matricule') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="tel">Telephone*</label>
                                <input id="tel" class="form-control"  name="tel" type="text" value="{{ old('tel') }}" required>
                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse*</label>
                                <input id="adresse" class="form-control"  name="adresse" type="text" value="{{ old('adresse') }}" required>
                                @if ($errors->has('adresse'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="sexe">Prorietaire*</label>
                                <select id="sexe" class="form-control select2" name="prorietaire" required>
                                    @foreach($prorietaires as $p)
                                    <option value="{{ $p->id }}">{{ $p->nom }} {{ $p->prenom }} {{ $p->nif }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('prorietaire'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prorietaire') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="sexe">Commune*</label>
                                <select id="sexe" class="form-control select2" name="commune" required>
                                    @foreach($communes as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('commune'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('commune') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="sexe">Reference 1*</label>
                                <select id="sexe" class="form-control select2" name="reference1" required>
                                    @foreach($references as $p)
                                        <option value="{{ $p->id }}">{{ $p->nom }} {{ $p->telephone }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('reference1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reference1') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="sexe">Reference 2*</label>
                                <select id="sexe" class="form-control select2" name="reference2" required>
                                    @foreach($references as $p)
                                        <option value="{{ $p->id }}">{{ $p->nom }} {{ $p->telephone }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('reference2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reference2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Preview</b></h4>
                            <div class="row">
                                <div class="col-sm-12" style="margin-top: 5px;">
                                    <div>
                                        <img src="#" class="img-responsive" id="prev-image" alt="--Picture--">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group text-center m-b-0">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                    Enregistrer
                                </button>
                                <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                    Annuler
                                </button>
                            </div>
                        </div>


                    </div>

                </div>






            </form>
        </div>

    </div>
@endsection
@section('js')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

        function readImage(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#prev-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }

        }
        $('#image').change(function(){
            readImage(this);
        });




        $(document).ready(function () {
            // Select2
            $(".selectpicker").selectpicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
//            //////////////////////////
        });
        jQuery(function ($) {
            $('.autonumber').autoNumeric('init');
        });


    </script>
@endsection
