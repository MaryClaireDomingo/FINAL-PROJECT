<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MasterController extends Controller
{

    function front() {
        return view('front');
    }


    function login() {
        return view('login');
    }

    function loginAdmin(Request $request) {

        
        $credentials = $request->only('email', 'password');
        // dd($credentials);

        if(!auth()->attempt($credentials)){
            return redirect()->route('index');
        }

        return back()->with('error', ' ');

        
        

        // return view('login', [
        //     $users => 'users'
        // ]);

    }


    function index() {
        return view('index');
    }


    function section1() {
        return view('section1');
    }


    function section2() {
        return view('section2');
    }

    function section3() {
        return view('section3');
    }

    function section4() {
        return view('section4');
    }

    function section5() {
        return view('section5');
    }

    function section6() {
        return view('section6');
    }


}
