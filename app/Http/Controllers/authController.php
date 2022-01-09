<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    //

    public function authenticate(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        if ($email == '' || $password == '') {
            Session::flash('error', 'Merci de remplir les différents champs');
            return redirect('/login');
        }
        $userConnected = User::where(['email' => $email])->first();
        if ($userConnected != null && Hash::check($password, $userConnected->password)) {
            Auth::login($userConnected);
            return redirect('/');
        }
        else{
            Session::flash('error', 'Cet utilisateur est inexistant');
            return redirect('/login');
        }
    }


    public function store(){

        $data = request()->except('token');
        Auth::login(User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]));
        return redirect('/dashboard');

    }
}


