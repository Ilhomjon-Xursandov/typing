<?php

namespace App\Http\Controllers;

use App\Models\User;
use Couchbase\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function show(User $user){
        return view('admin.user.show', compact('user'));
    }
}
