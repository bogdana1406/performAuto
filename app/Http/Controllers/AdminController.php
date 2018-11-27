<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestValidatePassword;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post')){
        $data = $request->input();
        if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'], 'admin'=>'1'])){

            return redirect('/admin/dashboard');
        }else{

            return redirect('/admin')->with('flash_massage_error', 'Invalid Username or Password');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard()
    {
     return view('admin.dashboard');
    }


    public function settings()
    {
    return view('admin.settings');
    }

    public function checkPassword(Request $request)
    {
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $check_password = Auth::user();
        if(Hash::check($current_password, $check_password->password)){
            echo "true"; die;
        }else{
            echo "false"; die;
        }
    }

    public function updatePassword(RequestValidatePassword $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $current_user = Auth::user();

            $current_password = $data['current_pwd'];
            if(Hash::check($current_password, $current_user->password)){
                $password = bcrypt($data['new_pwd']);
                $current_user->update(['password'=>$password]);

                return redirect('/admin/settings')->with('flash_massage_success', 'Password update Successfully');
            }else{
                return redirect('/admin/settings')->with('flash_massage_error', 'Incorrect current Password');
            }
        }

    }

    public function logout()
    {
        Session::flush();
        return redirect('/admin')->with('flash_massage_success', 'Logged out Successfully');
    }



}
