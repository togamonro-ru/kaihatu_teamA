<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller
{
    public function edit(Request $request){
        return view('edit');
    }
    public function delete(Request $request){
        return view('delete');
    }
    public function register(Request $request){
        return view('register');
    }

   
}
