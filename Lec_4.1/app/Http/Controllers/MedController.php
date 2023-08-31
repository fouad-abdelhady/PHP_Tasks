<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\med;
class MedController extends Controller
{
    function initMeds(){
       $medsList =  med::all();
       return view('pages.meds', ['meds'=>$medsList]);
    }
}
