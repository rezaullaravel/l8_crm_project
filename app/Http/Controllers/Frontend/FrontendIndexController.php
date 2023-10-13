<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendIndexController extends Controller
{
    //home page
    public function index(){
        return view('frontend.home.index');
    }//end method










}//end class
