<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('Backend.user.index', compact('users'));
    }

    public function show(User $user){
        return view('Backend.user.show', compact('user'));
    }
}
