<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin/auth');
    }

    public function customLogin(Request $request)
    {
        $fields = $request->only(['login', 'password']);
        if (Auth::attempt($fields)) {
            return view('admin/main')
                ->with('Вуху');
        }
        return back()->withErrors([
            'login' => 'Что-то неправильно'
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
    public function admin()
    {
        return view('admin/main');
    }
}
