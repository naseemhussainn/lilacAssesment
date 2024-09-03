<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::with('designation', 'department')->get();
        return view('search', compact('users'));
    }
}
