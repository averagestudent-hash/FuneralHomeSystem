<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use App\Models\Customer;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Log::info($request);
        
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            $customer = Customer::where('userID', $user->id)->first();

            return response()->json(['token' => $token, 'userid' => $user->id, 'custid' => $customer->id, 'message' => 'success']);
        }

        return response()->json(['message' => 'failed']);
    }
}
