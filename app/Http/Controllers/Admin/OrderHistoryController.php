<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderHistoryController extends Controller
{
    //order history
    public function index(){
        $orders = DB::table('orders')->orderBy('id','desc')->get();
        return view('admin.order.order_history',compact('orders'));
    }//end method


    //order details
    public function orderDetails($id){
        $order = Order::where('id',$id)->first();
        $orderDetails = OrderDetails::where('order_id',$id)->get();
        return view('admin.order.order_details',compact('order','orderDetails'));
    }//end method


    //change delivery history to one
    public function changeDeliveryStatusToOne($id){
        Order::find($id)->update([
            'status'=> 1,
        ]);

        return redirect()->back()->with('message','Product delivery status changed');
    }//end method


}//end method
