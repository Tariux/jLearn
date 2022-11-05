<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'ناحیه کاربری';

        return view('profile' , compact('title'));
    }

    public function welcome()
    {
        $title = 'خوش آمدید';

        return view('welcome' , compact('title'));

    }

    public function save_profile(Request $request)
    {


        $user = User::find(Auth::user()->user_ID);
        if ($user) {
    
            $data = $request->except('_token');
            
            foreach ($data as $key => $value) {

                $user->$key = $value;
            }
            
            if($user->save()) {
                return redirect()->route('account', ['__message' => 'updated']);

            } else {
                return redirect()->route('account', ['__message' => 'fail']);

            }

        }

    }
}
