@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="{{ route('car.update',['car'=> $car]) }}">
                    {{ csrf_field() }}
                    <div class="section">
                        <div class="section-title">Edit Car Information</div>
                        <div class="section-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" id="name" class="form-control" autocomplete="off"
                                           value="{{ $car->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Price Per KM</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><label for="price_per_km">RM</label></span>
                                        <input type="number" id="price_per_km" name="price_per_km" class="form-control"
                                               value="{{ $car->price_per_km }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Rent Per Hour</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><label for="rent_per_hour">RM</label></span>
                                        <input type="number" class="form-control" id="rent_per_hour"
                                               name="rent_per_hour" value="{{ $car->rent_per_hour }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Cover</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><label
                                                    for="year">Year Manufactured</label></span>
                                        <select class="form-control" id="year" name="year">
                                            @for($count = 2017; $count > 2000; $count--)
                                                <option value="{{ $count }}" {{ $count == $car->year ? 'selected' : null }}>{{ $count }}</option>
                                            @endfor
                                        </select>
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

        #year {
            width: 100% !important;
            border-left: 1px solid lightgrey;
            border-bottom: none;
            border-top: none;
            border-right: none
        }
    </style>
@endsection