<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show_form()
    {
        return view('user_form');
    }

    public function create_user(Request $request)
    {
        $email = $request->get('email');
        $name = $request->get('name');
        $password = $request->get('password');

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect(route('show_form'));
    }

    public function show_users()
    {
        $users = User::get();
        return view('users_show', ['users' => $users]);
    }
}
