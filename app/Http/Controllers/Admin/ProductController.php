<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductMultipleImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //product add
    public function addProduct(){
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.product_add',compact('categories','brands'));
    }//end method


    //product store
    public function storeProduct(Request $request){

        //form validation
        $request->validate([
            'category_id' => 'required',
            'brand_id' => 'required',
            'product_name' => 'required|unique:products',
            'product_thumbnail' =>'required',
            'product_description' => 'required',
            'price' => 'required',
            'featured' => 'required',
            'hot_deals' => 'required',
            'status' => 'required',
            'images' => 'required'
        ],[
            'category_id.required' =>'The Category field is required.',
            'brand_id.required' =>'The Brand field is required.',
            'images.required' =>'The Multiple image field is required.',
        ]);

         //product thumbnail image upload
         if($request->file('product_thumbnail')){
            $image = $request->file('product_thumbnail');
            $imageName = rand().'.'.$image->getClientOriginalName();
            Image::make($image)->resize(620,620)->save('upload/product_images/'.$imageName);
            $thumbnail_path = 'upload/product_images/'.$imageName;
        }

         //data insert
         $product = new Product();

         $product->user_id = Auth::user()->id;

         $product->category_id = $request->category_id;

         $product->brand_id = $request->brand_id;

         $product->product_name = $request->product_name;

         $product->product_description = $request->product_description;

         $product->price = $request->price;

         $product->featured = $request->featured;

         $product->hot_deals = $request->hot_deals;

         $product->status = $request->status;

         $product->product_thumbnail = $thumbnail_path;

         $product->save();



         //product multiple image upload
        if($request->file('images')){
            $images = $request->file('images');
           foreach($images  as $image){
            $imageName = rand().'.'.$image->getClientOriginalName();
            Image::make($image)->resize(500,500)->save('upload/product_images/'.$imageName);
            $image_path = 'upload/product_images/'.$imageName;

            ProductMultipleImage::create([
                'product_image' =>  $image_path,
                'product_id' =>   $product->id,
            ]);

           }
        }

        return redirect()->back()->with('message','Product added successfully');


    }//end method


    //manage product
    public function manageProduct(){
        $products = Product::orderBy('id','desc')->get();
        $categories = Category::all();
        return view('admin.product.product_manage',compact('products','categories'));
    }//end method



     //product filter by status
     public function filterByStatus(Request $request){

        $products = Product::where('status',$request->status)->get();

   if(count($products)>0){
       // return response()->json([
       //     'result'=>$result,
       // ]);

       return view('admin.product.filter_by_status',compact('products'))->render();
   } else{
       return response()->json([
           'status'=>'No data found',
       ]);
   }


}//end method



//product filter by category
public function filterBycategory(Request $request){

    $products = Product::where('category_id',$request->category_id)->get();

    if(count($products)>0){
        return view('admin.product.filter_by_status',compact('products'))->render();
    } else{
        return response()->json([
            'status'=>'No data found',
        ]);
    }
}//end method


//product deactive
public function deactiveProduct($id){
    $product = Product::find($id);
    $product->status = 0;
    $product->save();
    return redirect()->back()->with('message','Product deactivated successfully');
}//end method


//product active
public function activeProduct($id){
    $product = Product::find($id);
    $product->status = 1;
    $product->save();
    return redirect()->back()->with('message','Product activated successfully');
}//end method



//product details
public function detailsProduct($id){
    $product = Product::find($id);
    return view('admin.product.product_details',compact('product'));
}//end method



//product edit
public function editProduct($id){
    $product = Product::find($id);
    $categories = Category::all();
    $brands = Brand::all();
    return view('admin.product.product_edit',compact('product','categories','brands'));
}//end method


//product image delete from product_multiple_images table
public function deleteProductImage($id){
    $data= ProductMultipleImage::find($id);

    if(File::exists($data->product_image)){
        File::delete($data->product_image);
    }

    $data->delete();
    return redirect()->back();
}//end method


//product update
public function updateProduct(Request $request){
    $product = Product::find($request->id);

     //form validation
     $request->validate([
        'category_id' => 'required',
        'brand_id' => 'required',
        'product_name' => 'required|unique:products,product_name,'.$request->id,
        'product_description' => 'required',
        'price' => 'required',
        'featured' => 'required',
        'hot_deals' => 'required',
        'status' => 'required',
    ],[
        'category_id.required' =>'The Category field is required.',
        'brand_id.required' =>'The Brand field is required.',
        'images.required' =>'The Multiple image field is required.',
    ]);

     //product thumbnail image upload
     if($request->file('product_thumbnail')){
        if(File::exists($product->product_thumbnail)){
            unlink($product->product_thumbnail);
        }

        $image = $request->file('product_thumbnail');
        $imageName = rand().'.'.$image->getClientOriginalName();
        Image::make($image)->resize(620,620)->save('upload/product_images/'.$imageName);
        $thumbnail_path = 'upload/product_images/'.$imageName;

        $product->product_thumbnail = $thumbnail_path;
    }


    //data update
    $product->category_id = $request->category_id;

    $product->brand_id = $request->brand_id;

    $product->product_name = $request->product_name;

    $product->product_description = $request->product_description;

    $product->price = $request->price;

    $product->featured = $request->featured;

    $product->hot_deals = $request->hot_deals;

    $product->status = $request->status;

    $product->save();



    //product multiple image upload
   if($request->file('images')){
       $images = $request->file('images');
      foreach($images  as $image){
       $imageName = rand().'.'.$image->getClientOriginalName();
       Image::make($image)->resize(500,500)->save('upload/product_images/'.$imageName);
       $image_path = 'upload/product_images/'.$imageName;

       ProductMultipleImage::create([
           'product_image' =>  $image_path,
           'product_id' =>   $product->id,
       ]);

      }
   }

   return redirect('/admin/product/manage')->with('message','Product updated successfully');
}//end method



//product delete
public function deleteProduct($id){
    $product =   Product::find($id);

    //product thumbnail delete
    if(File::exists($product->product_thumbnail)){
        File::delete($product->product_thumbnail);
    }

    //product multiple image delete
    if($product->multiImages){
        foreach($product->multiImages as $image){
            if(File::exists( $image->product_image)){
                unlink( $image->product_image);
            }

            $imgdelete = ProductMultipleImage::find($image->id)->delete();
        }
    }

    $product->delete();
    return redirect('/admin/product/manage')->with('message','Product deleted successfully');
}//end method









}//end class
