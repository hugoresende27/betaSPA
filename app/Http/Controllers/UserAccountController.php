<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAccountController extends Controller
{
    public function create()
    {
        return inertia('UserAccount/Create');
    }

    public function store(Request $request)
    {
        $user = User::create ($request->validate([
            'name' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:4|confirmed',
            // 'password_confirmation' => 'required|string|min:4|confirmed',
        ]));

        // $user->password = Hash::make($user->password);
        // $user->save(); //if used make, did not store like create

        Auth::login($user);

        return redirect()->route('listing.index')
            ->with('success', 'Account created !');
    }
}
