<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'matric_no' => 'required|unique:users'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'code' => 500,
                'message' => 'Failed to register you',
                'errors' => $validator->errors()
            ]);
        }
        if ($request->car_name != null) {
            $request['role_id'] = 3;
        }

        User::create($request->all());

        return response()->json([
            'code' => 200,
            'message' => 'Successfully registered to this system. You may now login.'
        ]);
    }

    public function login(Request $request)
    {
        if (\Auth::attempt(['matric_no' => $request->matric_no, 'password' => $request->password])) {
            return response()->json([
                'code' => 200,
                'message' => 'Successfully logged in',
                'data' => \Auth::user()
            ]);
        }
        return response()->json([
            'code' => 500,
            'message' => 'Mismatch credentials',
        ]);
    }
}
