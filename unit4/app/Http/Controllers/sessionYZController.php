<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionYZController extends Controller
{
    //adding/set session value
    public function login(Request $request){
        $request->session()->put('name',$request->input('user'));
        return redirect('/form');
    }
    //delete(flushing or forgetting) session value
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/loginform');
    }
}
