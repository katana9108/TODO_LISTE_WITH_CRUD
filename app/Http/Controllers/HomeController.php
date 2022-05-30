<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function welcome(){
        if(Auth::check()) {
            $user = User::where('user_id',Auth::id());
            $todos = TodoList::all()->where('user_id',Auth::id());
            return view('welcome', compact('user','todos'));
        }else{
            return redirect()->route('registershow');
        }

    }
}
