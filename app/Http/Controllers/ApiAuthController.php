<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('username', $request->username)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'User atau password salah'
            ],401);
        }

        $token = $user->createToken('token')->plainTextToken;

        // return response()->json([
        //     'message'=>'success login',
        //     'user'=>$user,
        //     'token'=>$token,
        // ],200);

        return new LoginResource([
            'message'=>'success login',
            'user' => $user,
            'token'=>$token,
        ], 200);
    }
}
