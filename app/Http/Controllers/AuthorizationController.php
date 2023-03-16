<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class AuthorizationController extends Controller
{
    public function authorization() {
        return view('users.authorization', []);
    }
}
