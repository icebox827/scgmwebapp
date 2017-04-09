@extends('layouts.app')
@section('pagetitle')
    Registre
@endsection
@section('content')

    <div class="content">
        <div class="container">
            <form action="">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4>Nouveau Conducteur</h4>

                            <div class="form-group gal-upload">
                                <label for="file-4" class="col-sm-2 control-label">Photo*</label>


                                <input id="file-4" class="form-control file-loading" type="file" name="picture[]" multiple data-show-caption="true">


                            </div>
                            <div class="form-group">

                                <label for="nom">Nom*</label>

                                <input id="name" class="form-control" name="name" type="text" value="{{ old('name') }}" required>

                            </div>
                            <div class="form-group">
                                <label for="prenom">Prenom*</label>
                                <input  id ="lastname" class="form-control" name="prenom" type="text" value="{{ old('prenom') }}" required>
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

                            </div>
                            <div class="form-group">
                                <label for="lnaissance">Lieu de Naissance*</label>
                                <input id="lnaissance" class="form-control"  name="lnaissance" type="text" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sexe">Sexe*</label>
                                <select id="sexe" class="form-control selectpicker" name="sex" required>
                                    <option value="">--none--</option>
                                    <option {{ old('sex') == 'masculin' ? 'selected' : '' }} value="masculin">masculin</option>
                                    <option {{ old('sex') == 'feminin' ? 'selected' : '' }} value="feminin">feminin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cin">CIN*</label>
                                <input id="cin" class="form-control"  name="cin" type="text" value="{{ old('cin') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nif">NIF*</label>
                                <input id="nif" class="form-control"  name="nif" type="text" value="{{ old('nif') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="permis">Permis de Conduire*</label>
                                <input id="permis" class="form-control"  name="permis" type="text" value="{{ old('permis') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="empreinted">Empreinte Index-droite*</label>
                                <input id="empreinted" class="form-control"  name="empreinted" type="text" value="{{ old('empreinted') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="empreinteg">Empreinte Index-gauche*</label>
                                <input id="empreinteg" class="form-control"  name="empreinteg" type="text" value="{{ old('empreinteg') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tel">Telephone*</label>
                                <input id="tel" class="form-control"  name="tel" type="text" value="{{ old('tel') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse*</label>
                                <input id="adresse" class="form-control"  name="adresse" type="text" value="{{ old('adresse') }}" required>
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

                                <input id="name" class="form-control" name="name" type="text" value="{{ old('name') }}" required>

                            </div>
                            <div class="form-group">
                                <label for="prenom">Prenom*</label>
                                <input  id ="lastname" class="form-control" name="prenom" type="text" value="{{ old('prenom') }}" required>
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

                            </div>
                            <div class="form-group">
                                <label for="lnaissance">Lieu de Naissance*</label>
                                <input id="lnaissance" class="form-control"  name="lnaissance" type="text" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sexe">Sexe*</label>
                                <select id="sexe" class="form-control selectpicker" name="sex" required>
                                    <option value="">--none--</option>
                                    <option {{ old('sex') == 'masculin' ? 'selected' : '' }} value="masculin">masculin</option>
                                    <option {{ old('sex') == 'feminin' ? 'selected' : '' }} value="feminin">feminin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cin">CIN*</label>
                                <input id="cin" class="form-control"  name="cin" type="text" value="{{ old('cin') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nif">NIF*</label>
                                <input id="nif" class="form-control"  name="nif" type="text" value="{{ old('nif') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="permis">Permis de Conduire*</label>
                                <input id="permis" class="form-control"  name="permis" type="text" value="{{ old('permis') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="file-4" class="control-label">Empreinte Index-droite*</label>
                                <input id="image" class="form-control filestyle " type="file" name="picture" >
                            </div>
                            <div class="form-group">
                                <label for="file-4" class="control-label">Empreinte Index-gauche*</label>
                                <input id="image" class="form-control filestyle " type="file" name="picture" >
                            </div>
                            <div class="form-group">
                                <label for="tel">Telephone*</label>
                                <input id="tel" class="form-control"  name="tel" type="text" value="{{ old('tel') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse*</label>
                                <input id="adresse" class="form-control"  name="adresse" type="text" value="{{ old('adresse') }}" required>
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
                                </div>
                                <div class="form-group">
                                    <label for="Modele">Modele *</label>
                                    <input  id ="modele" class="form-control" name="modele" type="text" value="{{ old('modele') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="annee">Annee *</label>
                                    <input  id ="annee" class="form-control" name="annee" type="text" value="{{ old('mannee') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="couleur">Couleur *</label>
                                    <input  id ="couleur" class="form-control" name="couleur" type="text" value="{{ old('couleur') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="immatriculation">Immatriculation*</label>
                                    <input  id ="immatriculation" class="form-control" name="immatriculation" type="text" value="{{ old('immatriculation') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="puissance">Puissance*</label>
                                    <input  id ="puisance" class="form-control" name="puissance" type="text" value="{{ old('puissance') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="numeromoteur">Numero Moteur*</label>
                                    <input  id ="numeromoteur" class="form-control" name="numeromoteur" type="text" value="{{ old('numeromoteur') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="numeroserie">Numero Serie*</label>
                                    <input  id ="numeroserie" class="form-control" name="numeroserie" type="text" value="{{ old('numeroserie') }}" required>
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

                                                <input id="name" class="form-control" name="name" type="text" value="{{ old('name') }}" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="prenom">Prenom*</label>
                                                <input  id ="lastname" class="form-control" name="prenom" type="text" value="{{ old('prenom') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="adresse">Adresse*</label>
                                                <input id="adresse" class="form-control"  name="adresse" type="text" value="{{ old('adresse') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tel">Telephone*</label>
                                                <input id="tel" class="form-control"  name="tel" type="text" value="{{ old('tel') }}" required>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-box">
                                        <h4>Personnes de Reference  2</h4>
                                            <div class="form-group">

                                                <label for="nom">Nom*</label>

                                                <input id="name" class="form-control" name="name" type="text" value="{{ old('name') }}" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="prenom">Prenom*</label>
                                                <input  id ="lastname" class="form-control" name="prenom" type="text" value="{{ old('prenom') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="adresse">Adresse*</label>
                                                <input id="adresse" class="form-control"  name="adresse" type="text" value="{{ old('adresse') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tel">Telephone*</label>
                                                <input id="tel" class="form-control"  name="tel" type="text" value="{{ old('tel') }}" required>
                                            </div>
                                    </div>
                                        </div>

                                </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-box">
                                        <h4>Zone de Stationnement</h4>
                                        <div class="form-group">
                                            <label for="pass1">Station*</label>
                                            <input id="pass1" type="password" placeholder="Station" required
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="passWord2">Code Station*</label>
                                            <input data-parsley-equalto="#pass1" type="password" required
                                                   placeholder="Code Station" class="form-control" id="passWord2">
                                        </div>
                                        <div class="form-group">
                                            <label for="passWord2">Commune*</label>
                                            <input data-parsley-equalto="#pass1" type="password" required
                                                   placeholder="Commune" class="form-control" id="passWord2">
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