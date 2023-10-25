<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\AuthInterface;
use App\Http\Traites\AuthTrait;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthInterface
{

    public function loginForm()
    {
        return view("EndUser.Auth.login");
    }
    public function login($request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            toast('Welcome ' . $user->name, 'success');
            return redirect()->route('endUser.index');
        } else {
            alert()->error('Error', 'Invalid Credentials!');
            return redirect()->route('endUser.login');
        }
    }
    public function logout()
    {
        session()->flush();
        Auth::logout();
        return back();
    }

}
