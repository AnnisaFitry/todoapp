<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Http\Response;
=======
>>>>>>> ce1b3bc5bcce499a50b1de0aa67bf6f39d0e91cb
use App\Traits\ApiResponse;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> ce1b3bc5bcce499a50b1de0aa67bf6f39d0e91cb

class AuthController extends Controller
{
    use ApiResponse;
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;
        return $this->apiSuccess([
            'token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        if(!Auth::attempt($validated))
        {
            return $this->apiError('Credentials not match', Response::HTTP_UNAUTHORIZED);
        }
        $user = User::where('email', $validated['email'])->first();
        $token = $user->createToken('auth_token')->plainTextToken;
        return $this->apiSuccess([
            'token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }
}
