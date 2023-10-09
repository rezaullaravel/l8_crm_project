<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Image;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    //admin profile
    public function adminProfile(){
        $userId = Auth::user()->id;
        $user = User::find($userId);
        return view('admin.profile.profile_view',compact('user'));
    }//end method


    //admin profile edit
    public function adminProfileEdit(){
        $userId = Auth::user()->id;
        $user = User::find($userId);
        return view('admin.profile.profile_edit',compact('user'));
    }//end method


    //admin profile update
    public function adminProfileUpdate(Request $request){
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


    //password change
    public function adminPasswordChange(){
        return view('admin.profile.password_change');
    }//end method


    //password update
    public function adminPasswordUpdate(Request $request){
        $request->validate([
            'password' => ['required', 'string', 'confirmed','min:8'],
            'password_confirmation' => ['required'],
        ]);

        $userId = Auth::user()->id;
        $user = User::find($userId);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('message','Password Changed Successfully');
    }//end method







}//end method
