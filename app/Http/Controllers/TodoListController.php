<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoListController extends Controller
{
    public function createTodo(Request $request)
    {
        if(Auth::check()) {
            $request->validate([
                'message'=>'required',
                'date'=>'required',
            ]);
            $todo = TodoList::create([
                'message'=>$request->message,
                'date'=>$request->date,
                'done'==false,
                'user_id'=>Auth::id(),
            ]);
            $todo->save();
            return redirect()->route('welcome',encrypt($todo->user_id));
        }else{
            return redirect()->route('loginshow');
        }

    }
}
