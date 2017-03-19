@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="card card-tab">
                <div class="card-header" style="overflow-y:hidden;">
                    <ul class="nav nav-tabs">
                        {{--<li class="active">--}}
                            {{--<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"--}}
                               {{--aria-expanded="true">Cars</a>--}}
                        {{--</li>--}}
                        <li class="active" style="width: 100%;">
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"
                               aria-expanded="false">Places</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body no-padding tab-content">
                    {{--<div role="tabpanel" class="tab-pane no-padding active" id="tab1">--}}
                        {{--<div class="search-result">--}}
                            {{--<ul class="result">--}}
                                {{--@foreach($cars  as $car)--}}
                                    {{--<li>--}}
                                        {{--<div class="img">--}}
                                            {{--<img src="{{ $car->file_path or '/assets/images/b_no_image_icon.gif' }}">--}}
                                        {{--</div>--}}
                                        {{--<div class="info col-xs-12">--}}
                                            {{--<div class="col-xs-10">--}}
                                                {{--<div class="title">--}}
                                                    {{--<a href=""><span class="highlight">{{ $car->name }}</span></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-xs-2">--}}
                                                {{--<div class="btn-group-vertical" role="group">--}}
                                                    {{--<a href="{{ route('car.edit',['car' => $car->id]) }}"--}}
                                                       {{--class="btn btn-warning">--}}
                                                        {{--<i class="fa fa-edit"></i> Edit--}}
                                                    {{--</a>--}}
                                                    {{--<a href="{{ route('car.delete',['car' => $car->id]) }}"--}}
                                                       {{--class="btn btn-danger">--}}
                                                        {{--<i class="fa fa-trash"></i> Delete--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                            {{--<div class="footer">--}}
                                {{--{{ $cars->render() }}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div role="tabpanel" class="tab-pane no-padding active" id="tab2">
                        <div class="search-result">
                            <ul class="result">
                                @foreach($locations as $location)
                                    <li>
                                        <div class="img">
                                            <img src="{{ $location->file_path or '/assets/images/b_no_image_icon.gif' }}">
                                        </div>
                                        <div class="info col-xs-12">
                                            <div class="col-xs-10">
                                                <div class="title">
                                                    <a href=""><span class="highlight">{{ $location->name }}</span></a>
                                                </div>
                                                <div class="description">{{ $location->description }}</div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="btn-group-vertical" role="group">
                                                    <a href="{{ route('location.edit',['location' => $location->id]) }}"
                                                       class="btn btn-warning">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                    <a href="{{ route('location.delete',['location' => $location->id]) }}"
                                                       class="btn btn-danger">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="footer">
                                {{ $locations->render() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('location.store') }}" class="btn btn-info add"><i class="fa fa-building fa-2x"></i></a>
    <a href="{{ route('car.store') }}" class="btn btn-info add" style="right: 80px!important;"><i class="fa fa-car fa-2x"></i></a>

@endsection


@section('styles')
    <style>
        a.btn {
            color: white !important;
        }
        .add {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px;
            border-radius: 100px;
            z-index: 99999;
        }

    </style>
@endsection
