@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="{{ route('location.store') }}">
                    {{ csrf_field() }}
                    <div class="section">
                        <div class="section-title">New Location Information</div>
                        <div class="section-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" id="name" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="description">Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Price From UTM</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><label for="price_from_utm">RM</label></span>
                                        <input type="number" class="form-control" id="price_from_utm" name="price_from_utm">
                                    </div>
                                </div>
                            </div>
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