<?php

namespace Oauth2\Http\Controllers;

use Illuminate\Http\Request;
use Oauth2\Tasks;

class TasksController extends Controller
{
    public function getAll()
    {
        $tasks = Tasks::all();
        return $tasks;
    }

    public function add(Request $request)
    {
        $task = Tasks::create($request->all());
        return $task;
    }

    public function get($id)
    {
        $task = Tasks::find($id);
        return $task;

    }

    public function edit($id, Request $request)
    {
        $task = $this->get($id);
        $task->fill($request->all())->save();
        return $task;
    }

    public function delete($id){
        $task = $this->get($id);
        $task->delete();
        return $task;
    }

}
