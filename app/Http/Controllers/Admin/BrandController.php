<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //brand add
    public function addBrand(){
        return view('admin.brand.brand_add');
    }//end method


    //brand store
    public function storeBrand(Request $request){
                //form validation
                $request->validate([
                    'brand_name'=>'required|unique:brands',
                    'brand_description' =>'required'
                ],[
                    'brand_name.required'=>'Brand name is required',
                    'brand_name.unique'=>'The brnad name is already exists',
                    'brand_description.required'=>'Brand description is required'
                ]);


                //data insert
                Brand::insert([
                    'brand_name' => $request->brand_name,
                    'brand_description' => $request->brand_description,
                ]);

                return redirect()->back()->with('message','Brand added successfully');
    }//end method



    //brand manage
    public function manageBrand(){
        $brands = Brand::orderBy('id','desc')->get();
        return view('admin.brand.brand_manage',compact('brands'));
    }//end method



    //brand edit
    public function editBrand($id){
        $brand = Brand::find($id);
        return view('admin.brand.brand_edit',compact('brand'));
    }//end method


    //brand
    public function updateBrand(Request $request){

                    //form validation
                    $request->validate([
                        'brand_name'=>'required|unique:brands,brand_name,'.$request->id,
                        'brand_description' =>'required'
                    ],[
                        'brand_name.required'=>'Brand name is required',
                        'brand_name.unique'=>'The brnad name is already exists',
                        'brand_description.required'=>'Brand description is required'
                    ]);


                    //update data
                    Brand::find($request->id)->update([
                        'brand_name' => $request->brand_name,
                        'brand_description' => $request->brand_description,
                    ]);


                    return redirect('/admin/brand/manage')->with('message','Brand updated successfully');
         }//end method


    //delete brand
    public function deleteBrand($id){
        Brand::find($id)->delete();
        return redirect('/admin/brand/manage')->with('message','Brand deleted successfully');
    }//end method






}//end class
