<?php

namespace App\Http\Controllers\frontead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FronteadController extends Controller
{
    public function index(){
        return view('frontead.home.index');
       //return view('frontead.layouts.master');
    }
}