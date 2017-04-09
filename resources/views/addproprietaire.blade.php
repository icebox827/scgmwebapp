@extends('layouts.app')
@section('pagetitle')
    Registre
@endsection
@section('content')

    <div class="content">
        <div class="container">
            <form class="form-horizontal" role="form" method="post" action="{{ route("proprietaire.save") }}"
                  data-parsley-validate novalidate enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4>Nouveau Proprietaire</h4>


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
                                                        class="fa fa-calendar"></i></span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="lnaissance">Lieu de Naissance*</label>
                                <input id="lnaissance" class="form-control"  name="lnaissance" type="text" value="{{ old('lnaissance') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sexe">Sexe*</label>
                                <select id="sexe" class="form-control select2" name="sex" required>
                                    <option value="">--none--</option>
                                    <option {{ old('sex') == 'masculin' ? 'selected' : '' }} value="Masculin">Masculin</option>
                                    <option {{ old('sex') == 'feminin' ? 'selected' : '' }} value="Feminin">Feminin</option>
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
                                <label for="tel">Telephone*</label>
                                <input id="tel" class="form-control"  name="tel" type="text" value="{{ old('tel') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse*</label>
                                <input id="adresse" class="form-control"  name="adresse" type="text" value="{{ old('adresse') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sexe">Commune*</label>
                                <select id="sexe" class="form-control select2" name="commune" required>
                                    @foreach($communes as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
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


                    <div class="col-lg-6">

                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Preview</b></h4>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="preview"></div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="preview"></div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="preview"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" style="margin-top: 5px;">
                                    <div>
                                        <img class="img-responsive" id="image" alt="--Picture--">
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
@section('script')
    <script src="{{ URL::to('assets/plugins/cropper/cropper.js') }}"></script>
    <script type="text/javascript">

        //        $(document).ready(function () {
        //            $('#file-4').filestyle({
        //                input: false
        //            });
        //        });

        $(document).ready(function () {
            $("#file-4").fileinput({
                maxFileCount: 3
            });
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


        //preview image
        var test = function () {
            var $image = $('#image');
            var $previews = $('.preview');
            $image.cropper({
                build: function (e) {
                    var $clone = $(this).clone();

                    $clone.css({
                        display: 'block',
                        width: '100%',
                        minWidth: 0,
                        minHeight: 0,
                        maxWidth: 'none',
                        maxHeight: 'none'
                    });

                    $previews.css({
                        width: '100%',
                        overflow: 'hidden'
                    }).html($clone);
                },

                crop: function (e) {
                    var imageData = $(this).cropper('getImageData');
                    var previewAspectRatio = e.width / e.height;
//                    $("#button123").on('click', function () {
//                        console.log($(this).cropper('getCroppedCanvas'));
//                    });
                    $previews.each(function () {
                        var $preview = $(this);
                        var previewWidth = $preview.width();
                        var previewHeight = previewWidth / previewAspectRatio;
                        var imageScaledRatio = e.width / previewWidth;

                        $preview.height(previewHeight).find('img').css({
                            width: imageData.naturalWidth / imageScaledRatio,
                            height: imageData.naturalHeight / imageScaledRatio,
                            marginLeft: -e.x / imageScaledRatio,
                            marginTop: -e.y / imageScaledRatio
                        });
                    });
                }
            });
            return $(this);
        }
        var instance = null;

        // Image cropper
        $("input[type=file]").on("change", function () {
            $("#image").attr("src", URL.createObjectURL(this.files[0]));
            instance = test();
        });
        $("#button123").on("click", function () {
            console.log("test");
            console.log(instance.cropper('getCroppedCanvas'));
        });

        // Cropper image.

        //                $("#button123").on('click', function () {
        //                    console.log("Esdras");
        //                });
        // console.log(final);
        //            console.log($image.cropper('getCroppedCanvas'));
    </script>
@endsection
