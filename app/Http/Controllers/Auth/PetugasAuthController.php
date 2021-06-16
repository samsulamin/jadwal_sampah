<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $maxAttempts = 3;
    protected $decayMinutes = 2;

    protected $guard = 'petugas';

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function guard()
    {
        return auth()->guard('admin');
    }

    public function postLogin(Request $request)
    {
        if (auth()->guard('petugas')->attempt(['email' => $request->email, 'password' => $request->password ])) {
            return redirect()->route('desa.home');
        }

        return back()->with('error','Email-Address And Password Are Wrong.');
    }
}
