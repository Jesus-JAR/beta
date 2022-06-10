<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.users', [
           'jsControllers' => [0 => 'app/UserController'],
           'users' => User::all()
        ]);
    }
}
