<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    public function index(){
        return view("home",["task"=> Task::all()]);
    }
    public function store(Request $req){
        $req->validate([
            'title' => 'required',
        ]);
        $task = new Task();
        $task->title = $req->title;
        $task->save();
        return redirect()->route('homepage');

    }
    public function done($id){
        $task = Task::find($id);
        $task->status = false;
        $task->save();
        return redirect()->back();
    }
    public function remove($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }
}
