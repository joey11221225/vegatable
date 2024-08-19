<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function addcart(Request $request){
        $form=$request->validate([
            'p_name'=>'required',
            'p_desc'=>'required',
            'price'=>'required',
            'p_image'=>'required'
        ]);

        product::create($form);
        return back()->with('message','Add cart successful.');

    }
}
