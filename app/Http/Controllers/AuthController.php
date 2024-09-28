<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // 認証成功
            $user = Auth::user();
            $token = $user->createToken('user-management-api')->plainTextToken;
            return response()->json(['token' => $token, 'user' => $user], 200);
        }
    
        // 認証失敗
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
