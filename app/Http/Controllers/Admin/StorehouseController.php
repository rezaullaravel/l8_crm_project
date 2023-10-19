<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Storehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductMultipleImage;
use Illuminate\Support\Facades\File;

class StorehouseController extends Controller
{
    //add store house
    public function addStorehouse(){
        return view('admin.storehouse.add_storehouse');
    }//end method


    //storehouse store
    public function saveStorehouse(Request $request){
                //form validation
                $request->validate([
                    'name'=>'required|unique:storehouses',
                    'phone'=>'required',
                    'address'=>'required',
                ],[
                    'name.required'=>'The Store house name is required',
                    'name.unique'=>'The Store house name is already exists',
                ]);

                //insert data
                Storehouse::insert([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'address' => $request->address,
                ]);

                return redirect()->back()->with('message','Store house added successfully');
    }//end method


    //store house manage
    public function manageStorehouse(){
        $storehouses = Storehouse::orderBy('id','desc')->get();
        return view('admin.storehouse.manage_storehouse',compact('storehouses'));
    }//end method


    //store house edit
    public function editStorehouse($id){
        $storehouse = Storehouse::find($id);
        return view('admin.storehouse.edit_storehouse',compact('storehouse'));
    }//end method


    //update store house
    public function updateStorehouse(Request $request){
          //form validation
          $request->validate([
            'name'=>'required|unique:storehouses,name,'.$request->id,
            'phone'=>'required',
            'address'=>'required',
        ],[
            'name.required'=>'The Store house name is required',
            'name.unique'=>'The Store house name is already exists',
        ]);

        Storehouse::find($request->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.storehouse.manage')->with('message','Store house updated successfully');
    }//end method


    //store house delete
    public function deleteStorehouse($id){
       $storehouse = Storehouse::find($id);
        $products = Product::where('storehouse_id',$storehouse->id)->get();

        if($products){
            foreach($products as $product){
                if(File::exists($product->product_thumbnail)){
                    unlink($product->product_thumbnail);
                }

                    if($product->multiImages){
                                foreach($product->multiImages as $image){
                                    if(File::exists( $image->product_image)){
                                        unlink( $image->product_image);
                                    }

                                    $imgdelete = ProductMultipleImage::find($image->id)->delete();
                                }
                    }//end if
                    $product->delete();
               }//end foreach
          }//end if

          $storehouse->delete();


        return redirect()->route('admin.storehouse.manage')->with('message','Store house deleted successfully');
    }//end method







}//end method
