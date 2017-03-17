<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
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
}
