@extends('layouts.app')
@section('pagetitle')
    Registre
@endsection
@section('content')

    <div class="content">
        <div class="container">
            <form action="{{ route('reference.save') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                            <div class="card-box">
                                <h4>Nouvelle-Personnes de Reference</h4>
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
                                    <label for="adresse">Adresse*</label>
                                    <input id="adresse" class="form-control"  name="adresse" type="text" value="{{ old('adresse') }}" required>
                                    @if ($errors->has('adresse'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
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
                                    <label for="sexe">Commune*</label>
                                    <select id="sexe" class="form-control select2" name="commune" required>
                                        @foreach($communes as $c)
                                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('commune'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('commune') }}</strong>
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