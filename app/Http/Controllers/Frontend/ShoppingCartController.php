<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    //add to cart
    public function productAddtoCart(Request $request){
     if(Auth::check()){
        $product = ShoppingCart::where('user_id',Auth::user()->id)->where('product_id',$request->product_id)->first();

         if($product){
            return redirect()->back()->with('info-message','You have already added this product to shopping cart.');
         } else{
            ShoppingCart::insert([
                'user_id' => Auth::user()->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);

            return redirect()->back()->with('info-message','Product has been added to shopping cart.');
         }
     } else{
        return redirect('/login');
     }
    }//end method



    //card product view
    public function cartProductView(){
        $products = ShoppingCart::where('user_id',Auth::user()->id)->get();
        return view('frontend.cart.cart_product_view',compact('products'));
    }//end method



    //product quantity increment
     public function incrementQuantity(Request $request){
        $product = ShoppingCart::find($request->rowId);

        $product->quantity = $product->quantity+1;
        $product->save();
        return response()->json($product);
    }//end method


    //product quantity decrement
    public function decrementQuantity(Request $request){
        $product = ShoppingCart::find($request->rowId);

        $product->quantity=$product->quantity-1;
        $product->save();
         return response()->json($product);
    }//end method


    //cart item delete
    public function cartItemDelete(Request $request){
        $product = ShoppingCart::find($request->rowId)->delete();
        $products = ShoppingCart::where('user_id',Auth::user()->id)->count();
        return response()->json([
            'products'=>$products,
        ]);
    }//end method


     //empty all cart item
     public function emptyCart(){
        ShoppingCart::where('user_id',Auth::user()->id)->delete();
        return redirect()->back();
    }//end method








}//end class
