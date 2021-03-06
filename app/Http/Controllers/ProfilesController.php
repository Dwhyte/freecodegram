<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
//       $user = User::findorFail($user);

        return view('profiles.index', [ 'user' => $user ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }
}
