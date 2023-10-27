<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserOrderHistoryController extends Controller
{
    //user order history
    public function userOrderHistory(){
        $orders = Order::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('user.order.order_history',compact('orders'));
    }//end method


    //user order details
    public function userOrderDetails($id){
        $order = Order::where('id',$id)->first();
        $orderDetails = OrderDetails::where('order_id',$id)->get();
        return view('user.order.order_details',compact('orderDetails','order'));
    }//end method













}//end class
