@extends('layouts.master')

@section('content')
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                User Transactions
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Owner</th>
                                    <th>Location</th>
                                    <th>Pickup Time</th>
                                    <th>Pickup Location</th>
                                    <th>Duration</th>
                                    <th>Type</th>
                                    <th>Price (RM)</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $transaction->owner->name or null }}</td>
                                        <td>{{ $transaction->location->name or null }}</td>
                                        <td>{{ $transaction->pickup_time }}</td>
                                        <td>{{ $transaction->pickup_location }}</td>
                                        <td>{{ $transaction->duration }}</td>
                                        <td>
                                            @if($transaction->request_type == 1)
                                                Ride
                                            @else
                                                Rent
                                            @endif
                                        </td>
                                        <td>{{ $transaction->price }}</td>
                                        <td>
                                            @if($transaction->status == 0 || $transaction->status == 1)
                                                <span style="color:#20a3b9">Pending</span>
                                            @elseif($transaction->status == 3)
                                                <span style="color:#d73727">Cancelled</span>
                                            @elseif($transaction->status == 2)
                                                <span style="color:#18aa4a">Finished</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                User Services
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Client</th>
                                    <th>Location</th>
                                    <th>Pickup Time</th>
                                    <th>Pickup Location</th>
                                    <th>Duration</th>
                                    <th>Type</th>
                                    <th>Price (RM)</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $service->owner->name or null }}</td>
                                        <td>{{ $service->location->name or null }}</td>
                                        <td>{{ $service->pickup_time }}</td>
                                        <td>{{ $service->pickup_location }}</td>
                                        <td>{{ $service->duration }}</td>
                                        <td>
                                            @if($service->request_type == 1)
                                                Ride
                                            @else
                                                Rent
                                            @endif
                                        </td>
                                        <td>{{ $service->price }}</td>
                                        <td>
                                            @if($service->status == 0 || $service->status == 1)
                                                <span style="color:#20a3b9">Pending</span>
                                            @elseif($service->status == 3)
                                                <span style="color:#d73727">Cancelled</span>
                                            @elseif($service->status == 2)
                                                <span style="color:#18aa4a">Finished</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection