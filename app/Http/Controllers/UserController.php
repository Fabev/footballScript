<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    public function login(Request $request){
        if (Hash::check($request->password, Hash::make('f00tb4llTool'))){
            session()->put('logged', true);
            return redirect()->route('dashboard');
        }
        return back();
    }

    public function dashboard(){
        return view('dashboard');
    }
}
