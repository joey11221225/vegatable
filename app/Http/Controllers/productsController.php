<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    //
    public function home(){
        $products=product::all();
        return view('home',compact("products"));
    }

    public function cartlist(){
        $carts=cart::select("*")->join("products","carts.p_id","=","products.id")->get();
        $total_price=cart::selectRaw("SUM(products.p_price) as total_price")->join("products","carts.p_id","=","products.id")->value('total_price');
        
        return view('cartlist',compact("carts","total_price"));
    }

    public function addcart(Request $request,$products){
        $u_id=auth()->id();
        $form=new cart();
        $form["p_id"]=$products;
        $form["u_id"]=$u_id;
        $form["c_id"]=0;
        $form["qty"]=1000;
        $form["c_status"]="pending";
        $form->save();

        if($form){
            return back()->with("message","Add to cart success");
        }
        return back()->with("message","Add to cart ");

    }
}
