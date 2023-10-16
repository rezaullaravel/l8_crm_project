<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class Chat extends Component
{
    public $message;
    public $userId='';
    public function render()
    {
        return view('livewire.chat');
    }

    //sent message from admin or employee
    public function sentFromUser(){
        $user = User::where('id',Auth::user()->id)->first();

        if($user->role==1){
           $message = new Message();
          $message->user_id = Auth::user()->id;
          $message->receiver = $this->userId;
          $message->message = $this->message;
            $message->save();
            $this->reset('message');
            return redirect()->back();
        }

         if($user->role==2){
            $admin = User::where('role',1)->first();
           $message = new Message();
          $message->user_id = Auth::user()->id;
          $message->receiver = $admin->id;
          $message->message = $this->message;
            $message->save();
            $this->reset('message');
            return redirect()->back();
        }

    }//end mthod



}
