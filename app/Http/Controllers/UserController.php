<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function login() {
        return view('auth.login');
    }

    public function store(Request $request) {
        // Validate and store the blog post...
        $validated = $request->validate([
            'name' => 'required|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
    }
}
