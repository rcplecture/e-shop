<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $specials = Food::where('type', 1)->get();
        $menu = Food::where('type', 2)->get();
        return view('frontend.index', compact('specials', 'menu'));
    }
}
