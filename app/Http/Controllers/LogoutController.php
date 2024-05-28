<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function perform()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
