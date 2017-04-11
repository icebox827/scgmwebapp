@extends('layouts.app')
@section('pagetitle')
    Registre
@endsection
@section('content')

    <div class="content">
        <div class="container">
            <form class="form-horizontal" role="form" method="post" action="{{route('conducteur.save')}}" data-parsley-validate novalidate enctype="multipart/form-data">
                {{csrf_field()}}
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
                                <input id="image" class="form-control file-style" type="file" name="picture">
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
                                                        class="icon-calendar"></i></span>
                                </div>
                                @if ($errors->has('birthdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="lnaissance">Lieu de Naissance*</label>
                                <input id="lnaissance" class="form-control"  name="lnaissance" type="text" value="{{ old('lnaissance') }}" required>
                                @if ($errors->has('lnaissance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lnaissance') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="sexe">Sexe*</label>
                                <select id="sexe" class="form-control selectpicker" name="sex" required>
                                    <option value="">--none--</option>
                                    <option {{ old('sex') == 'masculin' ? 'selected' : '' }} value="masculin">masculin</option>
                                    <option {{ old('sex') == 'feminin' ? 'selected' : '' }} value="feminin">feminin</option>
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
                                <input id="nif" class="form-control"  name="nif" type="text" value="{{ old('nif') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="permis">Permis de Conduire*</label>
                                <input id="permis" class="form-control"  name="permis" type="text" value="{{ old('permis') }}" required>
                                @if ($errors->has('permis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('permis') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="empreinted">Empreinte Index-droite*</label>
                                <input id="empreinted" class="form-control"  name="empreinted" type="text" value="{{ old('empreinted') }}" required>
                                @if ($errors->has('empreinted'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('empreinted') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="empreinteg">Empreinte Index-gauche*</label>
                                <input id="empreinteg" class="form-control"  name="empreinteg" type="text" value="{{ old('empreinteg') }}" required>
                                @if ($errors->has('empreinteg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('empreinteg') }}</strong>
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

                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Preview</b></h4>
                            <div class="row">
                                <div class="col-sm-12" style="margin-top: 5px;">
                                    <div>
                                        <img class="img-responsive" id="image" alt="--Picture--">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">

                            <h4>Proprietaire</h4>
                            <div class="form-group">

                                <label for="nom">Nom*</label>

                                <input id="name" class="form-control" name="namep" type="text" value="{{ old('namep') }}" required>
                                @if ($errors->has('namep'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namep') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="prenom">Prenom*</label>
                                <input  id ="lastname" class="form-control" name="prenomp" type="text" value="{{ old('prenomp') }}" required>
                                @if ($errors->has('prenomp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenomp') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="emailAddress">Date de Naissance*</label>


                                <div class="input-group">
                                    <input type="text" name="birthdatep" class="form-control"
                                           placeholder="mm/dd/yyyy"
                                           id="datepicker-autoclose"
                                           value="{{ old('birthdate') }}" required>
                                            <span class="input-group-addon bg-custom b-0 text-white"><i
                                                        class="icon-calendar"></i></span>
                                </div>
                                @if ($errors->has('birthdatep'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdatep') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="lnaissance">Lieu de Naissance*</label>
                                <input id="lnaissance" class="form-control"  name="lnaissancep" type="text" value="{{ old('lnaissance') }}" required>
                                @if ($errors->has('lnaissancep'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lnaissancep') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="sexe">Sexe*</label>
                                <select id="sexe" class="form-control selectpicker" name="sexp" required>
                                    <option value="">--none--</option>
                                    <option {{ old('sex') == 'masculin' ? 'selected' : '' }} value="masculin">masculin</option>
                                    <option {{ old('sex') == 'feminin' ? 'selected' : '' }} value="feminin">feminin</option>
                                </select>
                                @if ($errors->has('sexp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sexp') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="cin">CIN*</label>
                                <input id="cin" class="form-control"  name="cinp" type="text" value="{{ old('cin') }}" required>
                                @if ($errors->has('cinp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cinp') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="nif">NIF*</label>
                                <input id="nif" class="form-control"  name="nifp" type="text" value="{{ old('nif') }}" required>
                                @if ($errors->has('nifp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nifp') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="permis">Permis de Conduire*</label>
                                <input id="permis" class="form-control"  name="permisp" type="text" value="{{ old('permis') }}" required>
                                @if ($errors->has('permisp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('permisp') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="tel">Telephone*</label>
                                <input id="tel" class="form-control"  name="telp" type="text" value="{{ old('tel') }}" required>
                                @if ($errors->has('telp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telp') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse*</label>
                                <input id="adresse" class="form-control"  name="adresse" type="text" value="{{ old('adresse') }}" required>
                                @if ($errors->has('adressep'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adressep') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4>Nouveau-Motocyclette</h4>

                                <div class="form-group">
                                    <label for="marque">Marque*</label>
                                    <input  id ="marque" class="form-control" name="marque" type="text" value="{{ old('marque') }}" required>
                                    @if ($errors->has('marque'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('marque') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Modele">Modele *</label>
                                    <input  id ="modele" class="form-control" name="modele" type="text" value="{{ old('modele') }}" required>
                                    @if ($errors->has('modele'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('modele') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="annee">Annee *</label>
                                    <input  id ="annee" class="form-control" name="annee" type="text" value="{{ old('mannee') }}" required>
                                    @if ($errors->has('annee'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('annee') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="couleur">Couleur *</label>
                                    <input  id ="couleur" class="form-control" name="couleur" type="text" value="{{ old('couleur') }}" required>
                                    @if ($errors->has('couleur'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('couleur') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="immatriculation">Immatriculation*</label>
                                    <input  id ="immatriculation" class="form-control" name="immatriculation" type="text" value="{{ old('immatriculation') }}" required>
                                    @if ($errors->has('immatriculation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('immatriculation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="puissance">Puissance*</label>
                                    <input  id ="puisance" class="form-control" name="puissance" type="text" value="{{ old('puissance') }}" required>
                                    @if ($errors->has('puissance'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('puissance') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="numeromoteur">Numero Moteur*</label>
                                    <input  id ="numeromoteur" class="form-control" name="numeromoteur" type="text" value="{{ old('numeromoteur') }}" required>
                                    @if ($errors->has('numeromoteur'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('numeromoteur') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="numeroserie">Numero Serie*</label>
                                    <input  id ="numeroserie" class="form-control" name="numeroserie" type="text" value="{{ old('numeroserie') }}" required>
                                    @if ($errors->has('numeroserie'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('numeroserie') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            </div>
                        </div>

                    </div>
                </div>



                        <div class="row">
                            <div class="col-lg-6">

                                    <div class="col-md-6">
                                        <div class="card-box">
                                        <h4>Personnes de Reference 1</h4>
                                            <div class="form-group">

                                                <label for="nom">Nom*</label>

                                                <input id="name" class="form-control" name="namer" type="text" value="{{ old('name') }}" required>
                                                @if ($errors->has('namer'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('namer') }}</strong>
                                    </span>
                                                @endif

                                            </div>
                                            <div class="form-group">
                                                <label for="prenom">Prenom*</label>
                                                <input  id ="lastname" class="form-control" name="prenomr" type="text" value="{{ old('prenom') }}" required>
                                                @if ($errors->has('prenomr'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenomr') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="adresse">Adresse*</label>
                                                <input id="adresse" class="form-control"  name="adresser" type="text" value="{{ old('adresse') }}" required>
                                                @if ($errors->has('adresser'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('adresser') }}</strong>
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
                                                <label for="tel">Telephone*</label>
                                                <input id="tel" class="form-control"  name="telr" type="text" value="{{ old('tel') }}" required>
                                                @if ($errors->has('telr'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('telr') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-box">
                                        <h4>Personnes de Reference  2</h4>
                                            <div class="form-group">

                                                <label for="nom">Nom*</label>

                                                <input id="name" class="form-control" name="namere" type="text" value="{{ old('name') }}" required>
                                                @if ($errors->has('namere'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('namere') }}</strong>
                                    </span>
                                                @endif

                                            </div>
                                            <div class="form-group">
                                                <label for="prenom">Prenom*</label>
                                                <input  id ="lastnamere" class="form-control" name="prenomre" type="text" value="{{ old('prenom') }}" required>
                                                @if ($errors->has('prenomre'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenomre') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="adresse">Adresse*</label>
                                                <input id="adresse" class="form-control"  name="adressere" type="text" value="{{ old('adresse') }}" required>
                                                @if ($errors->has('adressere'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('adressere') }}</strong>
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
                                                <label for="tel">Telephone*</label>
                                                <input id="tel" class="form-control"  name="telre" type="text" value="{{ old('tel') }}" required>
                                                @if ($errors->has('telre'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('telre') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                    </div>
                                        </div>

                                </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-box">
                                        <h4>Zone de Stationnement</h4>
                                        <div class="form-group">
                                            <label for="codestation">Code Station*</label>
                                            <select name="codestation" class="form-control select2">
                                                @foreach($stations as $s)
                                                    <option value="{{ $s->id }}">{{ $s->codestation }}</option>
                                                    @endforeach
                                            </select>
                                            @if ($errors->has('codestation'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('codestation') }}</strong>
                                    </span>
                                            @endif
                                            <br/><br/><br/><br/><br/>
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