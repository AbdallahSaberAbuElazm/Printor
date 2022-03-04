<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserApiResource;
use App\Models\User as ModelsUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'mobile'        => 'required',
        ]);

        $user = new ModelsUser();
        $user->first_name    = $request['first_name'];
        $user->last_name     = $request['last_name'];
        $user->email         = $request['email'];
        $user->password      = Hash::make($request['password']);
        $user->save();

         return new UserApiResource($user);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'         => 'required',
            'password'      => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = ModelsUser::where('email' ,$email)->first();
            $userAuth = auth()->user();
            $token = $user->createToken('token');
            return new UserApiResource($user);
        }else{
            return [
                'error' =>true,
                'message'=>'User login attempt failed',
            ];
        }
    }
}
