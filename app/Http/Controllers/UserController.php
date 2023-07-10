<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(User $user)
    {
        $dataUser = $user->get();

        return view('tampilUser', compact('dataUser'));
    }
    public function tambahForm()
    {
        return view('admin.user.tambahForm');
    }
}