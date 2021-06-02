<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Story;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class MasterController extends Controller
{

    function front() {
        return view('front');
    }

    function register() {
        return view('register');
    }

    function registerUser(Request $request) {        
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success', ' ');

    }


    function login() {
        return view('login');
    }

    function loginUser(Request $request) {        
        $credentials = $request->only('email', 'password');

        if(auth()->attempt($credentials)){
            return redirect()->route('index');
        }

        return back()->with('error', ' ');

    }


    function index() {
        return view('index');
    }


    function section2() {
        return view('section2', [
            'stories' => Story::get()
        ]);
    }

    function section3() {
        return view('section2', [
            'stories' => Story::get()
        ]);
    }

    function section4() {
        return view('section2', [
            'stories' => Story::get()
        ]);
    }

    function section5() {
        return view('section5');
    }

    function section6() {
        return view('section6');
    }



    public function logout(){
        
        auth()->logout();

        return redirect('login');

    }


}
