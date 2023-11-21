<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PrincipalController extends Controller
{
    //    
    public function index()
    {
        $employeeData = $this->getEmployeeData();
        
        return view('principal.home', compact('employeeData'));
    }

    public function about(){
        $employeeData = $this->getEmployeeData();

        return view('principal.about', compact('employeeData'));
    }

    private function getEmployeeData()
    {
        $employeeData = Session::get('employeeData');
        return $employeeData;
    }



}
