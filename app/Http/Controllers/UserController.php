<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //
    function login(Request $request)
    {
      //  return $request -> input();
    $user = User::where(['email'=> $request-> Email])->first();

    if (!$user || Hash::check($request->password,$user ->password))
    {
        return ("Username or Password is not matched");
    }
else{
    return Redirect('/');
}


    }
}
