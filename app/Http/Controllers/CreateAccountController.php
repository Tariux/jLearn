<?php

namespace App\Http\Controllers;

use App\Models\CreateAccount;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CreateAccountController extends Controller
{
    public function index()
    {
        $title = 'ایجاد حساب کاربری';
        return view('create_account' , compact('title'));

    }
    public function create(Request $request)
    {
        $validate_arr = [
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
        ];
        $request->validate($validate_arr);
        
        $user = new CreateAccount;
 
        $user->email = strtolower($request->email);
        $user->password = $request->password;
        $user->password = Hash::make($user->password);
        $user->username = strtolower($request->username);
        $user->favorites = strtolower($request->favorites);
        $user->mobile = $request->mobile;
        
        if ($user->save()) {
            return redirect()->route('account', ['__message' => 'account_created']);
        } else {
            return redirect()->route('account', ['__message' => 'fail']);
        }
        

    }
}
