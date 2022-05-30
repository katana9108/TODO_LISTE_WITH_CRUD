<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegisterForm(){
        return view('register');
    }

    public function register(Request $request, UserService $userService){
        $avatar = $userService->uploadAvatar($request);
        $user = $userService->createUser($request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email',
        ]));
        $user->save();
        Auth::login($user);
        return redirect()->route('welcome',encrypt($user->id));
    }
}
