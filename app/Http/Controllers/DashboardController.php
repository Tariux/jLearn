<?php

namespace App\Http\Controllers;

use App\Models\Service;
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

    public function create_service_page()
    {
        $title = 'ایجاد سرویس';
        $services = Service::all()->sortByDesc('created_at');

        return view('create_service' , compact('title' , 'services'));

    }
    public function create_service(Request $request)
    {
        $validate_arr = [
            'service_title' => 'required',
            'service_price' => 'required',
        ];
        $request->validate($validate_arr);
        
        $service = new Service;
    
        $service->service_title = $request->service_title;
        $service->service_desc = $request->service_desc;
        $service->service_price = $request->service_price;
        $service->service_provider = Auth::user()->user_ID;
        $service->service_type = $request->service_type;
        
        if ($service->save()) {
            return redirect()->route('create-service-page', ['__message' => 'service_created']);
        } else {
            return redirect()->route('create-service-page', ['__message' => 'fail']);
        }
        
    
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
