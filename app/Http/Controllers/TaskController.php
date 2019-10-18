<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tasks;

class TaskController extends Controller
{
    public function getAll(){  // get all tasks 

        return tasks::all();
    }
    
    public function getOne($id){ // get one task
        return tasks::find($id);
    }

    public function addTask(Request $request){ //add task
       
         return tasks::create($request->all());
    }

    public function update(Request $request, $id){ //udpate task
        $task=tasks::findOrFail($id);
        $task->update($request->all());

        return $task;

    }
    
    public function delete(Request $request, $id){ // delete one 
        $task= tasks::findOrFail($id);
        $task->delete();

        return 204;
    }


}
