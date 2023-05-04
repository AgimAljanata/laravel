<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(User $user)

    dataUser = $user ->get();

    return view ('admin,User,viewUser', compact('dataUser'));
}
public function tambahForm()
{
    return view ('admin.user.tambahForm');
}