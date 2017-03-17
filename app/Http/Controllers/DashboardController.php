<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view()
    {
        $users = User::all();
        $ride_cashflow = Transaction::where('');
        return view('dashboard');
    }

}
