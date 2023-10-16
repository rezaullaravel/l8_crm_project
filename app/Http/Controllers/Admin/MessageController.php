<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    //chat with admin
    public function chatWithAdmin(){
        return view('employee.chat_with_admin');
    }//end mthod


    //show
    public function show($id){
        $userId = $id;



        return view('employee.chat_with_admin',[
            'userId'=>$userId
        ]);
    }





    //chat with employee by admin
    public function chatWithEmployee(){
        return view('admin.chat.chat_with_employee');
    }//end method


}//end class
