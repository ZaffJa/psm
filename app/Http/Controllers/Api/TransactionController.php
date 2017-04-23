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

//        $request = '10 : 00 PM';
//
//        $timeArray = explode(' : ', $request);
//
//        $hour = (int)$timeArray[0];
//        $minute = (int)preg_replace("/[^0-9]/", "", $timeArray[1]);
//
//        return $minute;
        Transaction::create($request->all());

        return response()->json([
            'code' => 200,
            'message' => 'Your request has been approved',
        ]);
    }

    public function view(Request $request)
    {
        $transactions = Transaction::with('location','car','user','owner')
            ->where('user_id', $request->user_id)
            ->whereIn('status', [2, 3])
            ->get();

        $transactions = Transaction::with('location', 'car', 'user', 'owner')
            ->where('owner_id', $request->user_id)
            ->whereIn('status', [2, 3])
            ->get();

        return response()->json([
            'code' => 200,
            'message' => 'Your request has been approved',
            'data' => $transactions
        ]);
    }

    public function viewRequest(Request $request)
    {
        $transactions = Transaction::with('location', 'car', 'user', 'owner')
            ->where('status', 0)
            ->whereNotIn('user_id', [$request->user_id])
            ->get();

        return response()->json([
            'code' => 200,
            'message' => 'Your request has been approved',
            'data' => $transactions
        ]);
    }

    public function viewUpcomingRequest(Request $request)
    {


        $transactions = Transaction::with('location', 'car', 'user', 'owner')
            ->where('status', 1)
            ->where('owner_id', $request->user_id)
            ->get();

        if ($transactions == null) {

            $transactions = Transaction::with('location', 'car', 'user', 'owner')
                ->whereIn('status', [0, 1])
                ->where('user_id', $request->user_id)
                ->get();
        }

        return response()->json([
            'code' => 200,
            'message' => 'Your request has been approved',
            'data' => $transactions
        ]);
    }

    public function userCancelRequest(Request $request)
    {
        // Check whether owner or user request the cancellation
        $transaction = Transaction::where('id', $request->transaction_id)
            ->where('user_id', $request->user_id)->first();

        if ($transaction) {
            $transaction->update([
                'status' => 3
            ]);
        } else {
            $transaction = Transaction::find($request->transaction_id)->update([
                'owner_id' => null,
                'status' => 0
            ]);
        }

        return response()->json([
            'code' => 200,
            'message' => 'Your have successfully canceled this request',
            'data' => $transaction
        ]);
    }


    public function doneRequest(Request $request)
    {
        Transaction::find($request->transaction_id)->update([
            'status' => 2
        ]);

        return response()->json([
            'code' => 200,
            'message' => 'Request completed',
            ''
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
        $ride_takens = Transaction::where('user_id', $request->user_id)
            ->whereIn('status',[2,3])
            ->where('request_type', 1)->count();

        $ride_takens_price = Transaction::where('user_id', $request->user_id)
            ->whereIn('status',[2,3])
            ->where('request_type', 1)->sum('price');

        $rent_takens = Transaction::where('user_id', $request->user_id)
            ->whereIn('status',[2,3])
            ->where('request_type', 2)->count();

        $rent_takens_price = Transaction::where('user_id', $request->user_id)
            ->whereIn('status',[2,3])
            ->where('request_type', 2)->sum('price');


        $ride_givens = Transaction::where('owner_id', $request->user_id)
            ->whereIn('status',[2,3])
            ->where('request_type', 1)->count();

        $ride_givens_price = Transaction::where('owner_id', $request->user_id)
            ->whereIn('status',[2,3])
            ->where('request_type', 1)->sum('price');

        $rent_givens = Transaction::where('owner_id', $request->user_id)
            ->whereIn('status',[2,3])
            ->where('request_type', 2)->count();

        $rent_givens_price = Transaction::where('owner_id', $request->user_id)
            ->whereIn('status',[2,3])
            ->where('request_type', 2)->sum('price');

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
