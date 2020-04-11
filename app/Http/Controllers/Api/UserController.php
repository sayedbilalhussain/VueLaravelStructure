<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
       $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = auth()->user();
            $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return response()->json([
                'success'=>'logged In Successfully.'       
            ],200);
        }else{
            return response()->json([
                'error'=>'Credentials Not Matched'       
            ],400);
        } 
    }
}
