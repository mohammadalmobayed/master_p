<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HousingInfoController extends Controller
{
    public function index(){
        return view('pages.housing.Housing info');
    }
}
