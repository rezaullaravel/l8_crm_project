<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductSellingHistoryController extends Controller
{
    //product selling history
    public function productSellingHistory(){
        return view('admin.product_sell.product_sell_history');
    }//end method


    //state wise selling history
    public function statewiseSellingHistory(){
        $states = State::all();
        return view('admin.product_sell.statewise_sell',compact('states'));
    }//end method


    //state wise selling history result
    public function statewiseSellingHistoryResult(Request $request){
        $form = date('y-m-d 00:00:00',strtotime($request->from));
        $to = date('y-m-d 23:59:59',strtotime($request->to));

        $state = State::where('id',$request->c_state)->first();
        $orders = Order::where('c_state',$request->c_state)->whereBetween('date',[$form,$to])->get();

        return view('admin.product_sell.statewise_sell_result',compact('orders','state'));

    }//end method



    //date wise selling history
    public function datewiseSellingHistory(){
        return view('admin.product_sell.dateewise_sell');
    }//end method


    //date wise selling history result
    public function datewiseSellingHistoryResult(Request $request){
        $form = date('y-m-d 00:00:00',strtotime($request->from));
        $to = date('y-m-d 23:59:59',strtotime($request->to));

 $orders = Order::whereBetween('date',[$form,$to])->get();

        return view('admin.product_sell.datewise_sell_result',compact('orders','form','to'));
    }//end method











}//end method
