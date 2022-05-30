<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin(){
        $user = User::all();
        return view('login', compact('user'));
    }

    public function login(Request $request){
        $request->validate([
            'email' =>'required|email',
            'password'=>'required',
        ]);
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $user->save();
                Auth::login($user);
                return redirect()->route('welcome',encrypt($user->id));
            }else{
                return redirect()->route('registershow');
            }
        }else{
            return redirect()->route('registershow');
        }

    }

}
