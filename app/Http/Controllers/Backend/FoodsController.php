<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    public function index(){
        return view('backend.foods.index');
    }

    public function create(){
        return view('backend.foods.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $data['price'] = 100;
        $data['image_path'] = '/ima';
        $data['rating'] = 4;
        $data['is_discount'] = 15;
        $data['type'] = 1;
        Food::create($data);
        return redirect()->back();
    }
}
