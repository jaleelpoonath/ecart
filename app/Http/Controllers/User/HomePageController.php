<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class HomePageController
{
    public function home() {
        return view('users.home');
    }
}
