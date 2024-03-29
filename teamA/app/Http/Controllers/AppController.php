<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function register_merchandise(Request $request){
        return view('register_merchandise');
    }

    public function createmerch(Request $request){
        $param=[
            'name' => $request->name,
            'category' => $request->category,
            'costprice' => $request->costprice,
            'taxrate' => $request->taxrate,
            'img' => $request->img,
            'remarks' => $request->remarks,
            'drinkber_flg' => $request->drinkber_flg,
            'course_flg' => $request->course_flg,
        ];
        DB::Insert('INSERT INTO merchandise (name,category,costprice) VALUES (:name,:mail,:age)',$param);

        return redirect('/hello');
    }
}
