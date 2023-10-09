<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //employee dashboard
    public function index(){

        return view('employee.home.index');
    }//end method








}//end class
