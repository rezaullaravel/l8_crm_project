<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Image;

class UserProfileController extends Controller
{
    //user profile
    public function userProfile(){
        $userId = Auth::user()->id;
        $user = User::find($userId);
        return view('user.profile.profile_view',compact('user'));
    }//end method


    //user profile edit
    public function userProfileEdit(){
        $userId = Auth::user()->id;
        $user = User::find($userId);
        return view('user.profile.profile_edit',compact('user'));
    }//end method


    //user profile update
    public function userProfileUpdate(Request $request){
        $user = User::find($request->id);

        //image upload
        if($request->image){
            if(File::exists($user->image)){
                unlink($user->image);
            }

            $image = $request->image;
            $imageName = rand().'.'.$image->getClientOriginalName();
            Image::make($image)->resize(400,300)->save('upload/user_images/'.$imageName);
            $imageUrl = 'upload/user_images/'.$imageName;

            $user->image = $imageUrl;
        }

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->back()->with('message','Profile Updated Successfully');
    }//end method
}//end method
