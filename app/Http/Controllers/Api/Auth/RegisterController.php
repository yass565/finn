<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerUser(Request $request){
        $this->validate($request, [
            
            'email' => 'unique:users',
            'password' => 'confirmed',

        ]);
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' =>$request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response(['message' => 'User created !'], 200);
    }
}
