<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/masuk/index';  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
{
    if (auth()->user()->role == 'admin') {
        return '/admin/dashboard';
    }

    return '/masuk/index';
}

}
