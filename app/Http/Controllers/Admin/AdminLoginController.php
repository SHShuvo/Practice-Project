<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AdminLoginController extends Controller
{   
    public function showForm(){
       return view('welcome');
    }

    public function login(Request $request)
    {   
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:3'
        ]);
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)){
            return redirect()->intended(route('admin.dashboard'));
        }
        return ['msg'=>'login failed'];
        //return redirect()->back()->withInput($request->only('email','remember'));
    }
}
