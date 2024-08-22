<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('user-register');
    }

    public function store(StoreUserRequest $request)
    {
        $validatedData = $request->validated();

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    }
}
