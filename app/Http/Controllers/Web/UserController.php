<?php

namespace App\Http\Controllers\Web;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function view()
    {
        $users = User::paginate(10);

        return view('view_users',compact('users'));
    }

    public function viewUserDetail(User $user)
    {
        $transactions = $user->transactions;
        $services = $user->services;
        return view('view_user_details',compact('transactions','services'));
    }
}
