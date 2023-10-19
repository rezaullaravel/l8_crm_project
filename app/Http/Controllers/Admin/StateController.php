<?php

namespace App\Http\Controllers\Admin;

use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    //add state
    public function addState(){
        return view('admin.state.state_add');
    }//end method


    //store state
    public function storeState(Request $request){
                //form validation
                $request->validate([
                    'state_name'=>'required|unique:states'
                ],[
                    'state_name.required'=>'The State name field is required.',
                    'state_name.unique'=>'The state name is already exists.',
                ]);

                State::insert([
                    'state_name' => $request->state_name,
                ]);

                return redirect()->back()->with('message','State added Successfully');
    }//end method


    //manage state
    public function manageState(){
        $states = State::orderBy('id','desc')->get();
        return view('admin.state.state_manage',compact('states'));
    }//end method


    //edit state
    public function editState($id){
        $state = State::find($id);
        return view('admin.state.state_edit',compact('state'));
    }//end method


    //state update
    public function updateState(Request $request){
         //form validation
         $request->validate([
            'state_name'=>'required|unique:states,state_name,'.$request->id,
        ],[
            'state_name.required'=>'The State name field is required.',
            'state_name.unique'=>'The state name is already exists.',
        ]);

        State::find($request->id)->update([
            'state_name' => $request->state_name,
        ]);

        return redirect()->route('admin.state.manage')->with('message','State updated Successfully');
    }//end method


    //delete state
    public function deleteState($id){
        State::find($id)->delete();
        return redirect()->route('admin.state.manage')->with('message','State deleted Successfully');

    }//end method








}//end class
