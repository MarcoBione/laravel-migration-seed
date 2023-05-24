<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House; //richiamo il mio model

class HomeController extends Controller
{
    public function index(){
        $houses = House::all();
        return view('welcome', compact('houses'));
    }
}
