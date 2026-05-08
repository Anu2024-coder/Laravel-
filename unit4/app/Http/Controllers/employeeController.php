<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class employeeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'age' => 'required|numeric|min:18',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'age' => $request->age,
        ]);

        return "Registration successful";
    }
}
