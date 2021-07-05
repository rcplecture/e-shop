<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::latest()->get();
        return view('task.index', compact('tasks'));
    }

    public function create(){
        return view('task.create');
    }

    public function store(Request $request){
        $data = $request->all();

        // Data validation

        Task::create($data);

        // Data insert message

        return redirect()->back()->with('success','Item created successfully!');
    }

    public function edit($id){
        $task = Task::where('id', $id)->first();
        return view('task.edit', compact('task'));
    }

    public function update(Request $request, $id){
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        Task::where('id', $id)->update($data);

        return redirect()->back()->with('success','Item updated successfully!');
    }

    public function delete($id){
        Task::find($id)->delete();
        return redirect()->back()->with('success','Item deleted successfully!');
    }
}
