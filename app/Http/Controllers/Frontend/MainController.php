<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $foods = Food::all();
        return view('frontend.index', compact('foods'));
    }
}
