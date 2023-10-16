<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendIndexController extends Controller
{
    //home page
    public function index(){
        $products = Product::orderBy('id','desc')->limit(10)->get();
        return view('frontend.home.index',compact('products'));
    }//end method


    //product single page
    public function productSingle($id){
        $product = Product::find($id);
        return view('frontend.product.product_single',compact('product'));
    }//end method










}//end class
