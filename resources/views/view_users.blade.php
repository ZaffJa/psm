@extends('layouts.master')

@section('content')
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                Users Information
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Matric No.</th>
                                <th>Phone No.</th>
                                <th>Car Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><a href="{{ route('user.details',$user->id) }}">{{ $user->matric_no }}</a></td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->car_name or 'None' }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection