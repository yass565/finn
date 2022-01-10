<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function login(Request $req ){
        $this->validate($req,
        [
            'email' => 'required|max:255',
            'password' => 'required'

        ]);
        $login = $req->only('email', 'password');

        if(!Auth::attempt($login)){
            return response(['message', "Invalide login ou mot de passe !"], 401);
        }

        // else we create the token for the user.
        /**
         * @var User $user
         */

        $user = Auth::User();
        $token = $user->createToken($user->name);

        return response([
            'id' => $user->id,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'email' => $user->email,
            'profile' => $user->profile,
            'phone' => $user->phone,
            'address' => $user->address,
            'pin_code' => $user->pin_code,
            'date_birth' => $user->date_birth,
            'gender' => $user->date_birth,
            'status' => $user->status,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at,
            'token' => $token->accessToken,
            'token_expires_at' => $token->token->expires_at,
        ], 201);
    }
}
