<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view()
    {
        $users = User::whereDate('created_at', Carbon::now()->format('Y-m-d'))->count();

        $get_rides = Transaction::select('price')
            ->where('request_type', 1)
            ->where('status', 2)
            ->whereDate('updated_at', Carbon::now()->format('Y-m-d'))
            ->sum('price');

        $get_cars = Transaction::select('price')
            ->where('request_type', 2)
            ->where('status', 2)
            ->whereDate('updated_at', Carbon::now()->format('Y-m-d'))
            ->sum('price');

        return view('dashboard',compact('users','get_rides','get_cars'));
    }

    public function updateTransactions()
    {
        $transactions = Transaction::whereIn('status',[2,3])->get();
        $now = Carbon::now();
        echo $now.'<br>';
        foreach ($transactions as $transaction) {
            $end = $transaction->updated_at;
            $length = $end->diffInHours($now);
            if($length > 2) {
                $transaction->update([
                    'status' => 3
                ]);
            }
        }
        return redirect('/')->with('status', 'Refreshed transactions');
    }


}
