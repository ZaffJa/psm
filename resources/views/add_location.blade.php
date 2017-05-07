@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="{{ route('location.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="section">
                        <div class="section-title">New Location Information</div>
                        <div class="section-body">
                            <div class="form-group">
                                <div class="col-xs-offset-3" style="padding-left: 15px;">
                                    <img id="blah" src="/assets/images/b_no_image_icon.gif"
                                         alt="your image" class="thumbnail" style="height: 200px; width: 200px"/>
                                    <input type='file' id="imgInp" value="Upload an image" name="image"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" id="name" class="form-control" autocomplete="off" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="lat">Latitude</label>
                                <div class="col-md-9">
                                    <input type="text" name="lat" id="lat" class="form-control" autocomplete="off" value="{{ old('lat') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="lng">Longitude</label>
                                <div class="col-md-9">
                                    <input type="text" name="lng" id="name" class="form-control" autocomplete="off" value="{{ old('lng') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="description">Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="description" rows="3"
                                              class="form-control">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-3 control-label">Price From UTM</label>--}}
                                {{--<div class="col-md-9">--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon"><label for="price_from_utm">RM</label></span>--}}
                                        {{--<input type="number" class="form-control" id="price_from_utm"--}}
                                               {{--name="price_from_utm" value="{{ old('price_from_utm') }}">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="form-footer">
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a type="button" href="{{ route('setting') }}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <style>
        label {
            font-weight: normal;
            padding-top: 5px;
        }
    </style>
@endsection

@section('scripts')
    <script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgInp").change(function () {
            readURL(this);
        });
    </script>
@endsection