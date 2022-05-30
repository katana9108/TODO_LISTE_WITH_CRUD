<?php

namespace App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
// use Illuminate\Support\ServiceProvider;

class UserService
{
    public function uploadAvatar(Request $request): ?string {
        return ($request->hasFile('avatar'))
                ? $request->file('avatar')->store('../../public/avatars')
                : NULL;

    }

    public function createUser(array $userData): User
    {
        $user = User::create([
            'name' => $userData['name'],
            'password'=> Hash::make($userData['password']),
            'email'=>$userData['email'],
        ]);
        $user->save();
        return $user;

    }



}
