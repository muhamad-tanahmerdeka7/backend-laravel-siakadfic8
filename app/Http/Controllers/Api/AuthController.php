<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    //disni kita mau pakai sanctum
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {

            throw ValidationException::withMessages([

                'email' => ['email incorrect']

            ]);
        }

        if (!Hash::check($request->password, $user->password)) {

            throw ValidationException::withMessages([

                'password' => ['password incorrect']

            ]);
        }

        $token = $user->createToken('api-token')->plainTextToken;
        return response()->json([
            'jwt-token' => $token,
            'user' => $user,
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json([
            'message' => 'logout successfully',
        ]);
    }
}
