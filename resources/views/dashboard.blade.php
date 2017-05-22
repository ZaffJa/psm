@extends('layouts.master')

@section('content')

    <div class="col-xs-12 col-md-12">
        <a class="card card-banner card-green-light">
            <div class="card-body">
                <i class="icon fa fa-shopping-basket fa-4x"></i>
                <div class="content">
                    <div class="title">Ride Cash Flow Today</div>
                    <div class="value"><span class="sign">RM </span>{{ $get_rides }}</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xs-12 col-md-12">
        <a class="card card-banner card-blue-light">
            <div class="card-body">
                <i class="icon fa fa-thumbs-o-up fa-4x"></i>
                <div class="content">
                    <div class="title">Rents Cash Flow Today</div>
                    <div class="value"><span class="sign">RM </span>{{ $get_cars }}</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xs-12 col-md-12">
        <a class="card card-banner card-yellow-light" href="{{ route('users') }}">
            <div class="card-body">
                <i class="icon fa fa-user-plus fa-4x"></i>
                <div class="content">
                    <div class="title">New Registration</div>
                    <div class="value"><span class="sign"></span>{{ $users }}</div>
                </div>
            </div>
        </a>
    </div>
    <a href="{{ route('update.transactions') }}" class="btn btn-info add"><i class="fa fa-refresh fa-2x"></i></a>


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


