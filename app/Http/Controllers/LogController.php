<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LogController extends Controller
{
    //
    public function getLogin()
    {
    	return view('login');
    }

    public function Login(Request $request)
    {
    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])){
                return redirect('homepage');
            }
            else{
                Auth::logout();
                return redirect()->back()->with('notification', 'Account is blocked.');
            }
        }else{
            return redirect()->back()->with('notification', 'Email or password is incorrect.');
        }
    }

    public function getRegister()
    {
    	return view('register');
    }

    public function Register(Request $request)
    {
    	$input = $request->only('name', 'email');
        $input['password'] = bcrypt($request->password);
        $input['level'] = 0;
        $input['status'] = 1;
        $user = User::create($input);

        return redirect('login')->with('notification', 'Register is success.');
    }

    public function Logout()
    {
    	Auth::logout();
        return redirect('login');
    }
}
