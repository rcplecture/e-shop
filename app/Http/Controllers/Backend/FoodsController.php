<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    public function index(){
        $foods = Food::all();
        return view('backend.foods.index', compact('foods'));
    }

    public function create(){
        return view('backend.foods.create');
    }

    public function store(Request $request){
        $data = $request->all();
        if ($request->has('image_path')){
            $imageName = time().'.'.$request->image_path->extension();
            $request->image_path->move(public_path('uploads'), $imageName);
            $data['image_path'] = $imageName;
        }
        Food::create($data);
        return redirect()->back();
    }
}
