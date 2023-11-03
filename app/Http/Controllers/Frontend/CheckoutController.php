<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\State;
use App\Models\OrderDetails;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //checkout page
    public function checkout(){
        $states = State::all();
        return view('frontend.checkout.checkout',compact('states'));
    }//end method


    //place order
    public function placeOrder(Request $request){
         //order insert
          $data = [];
          $data['user_id'] = Auth::user()->id;

          $data['customer_name'] = Auth::user()->name;

          $data['c_shipping_address'] = $request->c_shipping_address;

          $data['c_country'] = $request->c_country;

          $data['c_state'] = $request->c_state;

          $data['c_city'] = $request->c_city;

          $data['c_zipcode'] = $request->c_zipcode;

          $data['c_phone'] = $request->c_phone;

          $data['c_email'] = $request->c_email;

          $data['order_total'] = $request->order_total;

          $data['payment_type'] = $request->payment_type;

          $data['date'] = date('y-m-d h:i:s');


          $orderId = Order::insertGetId($data);


            //order details insert
            $cartproducts = ShoppingCart::where('user_id',Auth::user()->id)->get();

            foreach($cartproducts as $product){
                OrderDetails::insert([
                  'order_id' => $orderId,
                  'product_id' => $product->product_id,
                  'product_quantity' => $product->quantity,
                  'price' => $product->product->price,
                  'date' => date('y-m-d h:i:s'),
                //   'color' => $product->color,
              ]);
            }


           //delete all shopping cart product
           ShoppingCart::where('user_id',Auth::user()->id)->delete();

           return redirect()->back()->with('message','Your order has been successfully submitted');


    }//end method









}//end method
