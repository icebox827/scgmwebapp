@extends('layouts.app')
@section('pagetitle')
    Registre
@endsection
@section('content')

    <div class="content">
        <div class="container">
            <form class="form-horizontal" role="form" method="post" action="{{ route("registraire") }}"
                  data-parsley-validate novalidate enctype="multipart/form-data">
                {{ csrf_field() }}
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
                                        <strong>{{ $errors->first('codestation') }}</strong>
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
                            <div class="form-group">
                                <label for="sexe">Prorietaire*</label>
                                <select id="sexe" class="form-control selectpicker" name="prorietaire" required>
                                    <option value="">--none--</option>

                                </select>
                                @if ($errors->has('proprietaire'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('proprietaire') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        {{--<div class="form-group text-right m-b-0">--}}
                            {{--<button class="btn btn-primary waves-effect waves-light" type="submit">--}}
                                {{--Enregistrer--}}
                            {{--</button>--}}
                            {{--<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">--}}
                                {{--Annuler--}}
                            {{--</button>--}}
                        {{--</div>--}}
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






            </form>
        </div>

    </div>
@endsection