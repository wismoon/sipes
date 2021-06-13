<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirecTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        //dd($request->all());
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(['email' => $input['email'], 'password' => $input['password']]))
        {
            if(auth()->user()->is_admin == 1){
                // echo('Admin');
                return redirect()->route('admin');
            }
        }else{
            return redirect()->route('login')->with('error', 'Email-Address And Password are wrong');
            // echo('gagal login');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect(route('login'));
    }
}
