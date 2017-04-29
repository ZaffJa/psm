<?php

namespace App\Http\Controllers\Api;

use App\User;
use Hash;
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

    public function checkMatricNumber(Request $request)
    {
        $user = User::where('matric_no', $request->matric_no)->first();

        if ($user)
            return 1;
        return 0;
    }

    public function update(Request $request)
    {
        $user = User::find($request->user_id);

        if ($request->password != null) {
            if (Hash::check($request->password, $user->password)) {
                // The passwords match...
                $user->update([
                    'password' => $request->password
                ]);
            }
        }

        if ($request->car_name != null) {
            $user->update([
                'role_id' => 3,
                'car_name' => $request->car_name
            ]);
        }
        else {
            $user->update([
                'role_id' => 2,
            ]);
        }

        if ($request->phone != null)
            $user->update([
                'phone' => $request->phone
            ]);

        if ($request->email != null)
            $user->update([
                'email' => $request->email
            ]);

        return response()->json([
            'code' => 200,
            'message' => 'Updated your information',
            'data' => $user
        ]);
    }
}
