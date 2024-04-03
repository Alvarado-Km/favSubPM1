<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class UserController extends Controller
{

public function login( request $request) {
    $credentials = $request->validate ([
                'email' => 'required email',
                'password' => 'required',

    ]);
if (Auth::attempt($credentials)) {
    return redirect('/');
}
return back()->withErrors(['email'=> 'credenciales incorrectas' ]);
}
public function create(){

}
}

