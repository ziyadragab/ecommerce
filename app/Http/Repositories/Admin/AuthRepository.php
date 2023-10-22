<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AuthInterface;
use App\Http\Traites\AuthTrait;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthInterface
{

    public function loginForm()
    {
        return view('Admin.Pages.login');
    }
    public function login($request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->status == 1) {
                toast('Welcome ' . $user->name, 'success');
                return redirect(route('admin.index'));
            } else {
                alert()->error('Error', 'You Are Not A Admin!');
                return redirect(route('endUser.loginForm'));
            }
        }
        alert()->error('Error', 'Invalid Credentials!');
        return redirect()->route('admin.login');
    }
    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect("endUser.index");
    }
}
