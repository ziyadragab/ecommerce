<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\RegisterInterface;
use App\Models\User;

class RegisterRepository implements RegisterInterface{
  public function registerForm()
  {
     return view("EndUser.Auth.register");
  }
  public function register($request)
  {

    $data=$request->validated();
    $data['password']=bcrypt($data['password']);
    User::create($data);
    toast('User Created Successfully', 'success');
    return redirect()->route("endUser.loginForm");

  }
}



?>

