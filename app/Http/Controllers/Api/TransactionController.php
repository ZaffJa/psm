<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function store(TransactionRequest $request)
    {
        Transaction::create($request->all());

        return response()->json([
            'code' => 200,
            'message' => 'Your request has been approved',
        ]);
    }

    public function view(Request $request)
    {
        $user = User::find($request->user_id);

        return response()->json([
            'code' => 200,
            'message' => 'Your request has been approved',
            'data' => $user->transactions
        ]);
    }

    public function viewRequest(Request $request)
    {
        $transactions = Transaction::with('location','car','user','owner')
            ->where('status', 0)
            ->whereNotIn('user_id', [$request->user_id])
            ->get();

        return response()->json([
            'code' => 200,
            'message' => 'Your request has been approved',
            'data' => $transactions
        ]);
    }

    public function acceptRequest(Request $request)
    {
        Transaction::find($request->transaction_id)->update([
            'owner_id' => $request->owner_id,
            'status' => 1
        ]);

        return response()->json([
            'code' => 200,
            'message' => 'Your request has been approved',
        ]);
    }

    public function dashboard(Request $request)
    {
        $ride_takens = Transaction::where('user_id',$request->user_id)
            ->where('status',1)
            ->where('request_type',1)->count();

        $ride_takens_price = Transaction::where('user_id',$request->user_id)
            ->where('status',1)
            ->where('request_type',1)->sum('price');

        $rent_takens = Transaction::where('user_id',$request->user_id)
            ->where('status',1)
            ->where('request_type',2)->count();

        $rent_takens_price = Transaction::where('user_id',$request->user_id)
            ->where('status',1)
            ->where('request_type',2)->sum('price');


        $ride_givens = Transaction::where('owner_id',$request->user_id)
            ->where('status',1)
            ->where('request_type',1)->count();

        $ride_givens_price = Transaction::where('owner_id',$request->user_id)
            ->where('status',1)
            ->where('request_type',1)->sum('price');

        $rent_givens = Transaction::where('owner_id',$request->user_id)
            ->where('status',1)
            ->where('request_type',2)->count();

        $rent_givens_price = Transaction::where('owner_id',$request->user_id)
            ->where('status',1)
            ->where('request_type',2)->sum('price');

        return response()->json([
            'code' => 200,
            'message' => 'Your request has been approved',
            'ride_takens' => $ride_takens,
            'ride_takens_price' => $ride_takens_price,
            'rent_takens' => $rent_takens,
            'rent_takens_price' => $rent_takens_price,
            'ride_givens' => $ride_givens,
            'ride_givens_price' => $ride_givens_price,
            'rent_givens' => $rent_givens,
            'rent_givens_price' => $rent_givens_price,
        ]);
    }
}
