<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use DB;
Use App\Task;
use App\Subject;
class TaskController extends Controller
{
    //

    public function index()
    {

      $tasks=Task::get();
      // $subjects=Subject::all();
      return view('tasks.index',compact('tasks'));
    }

    public function store(TaskRequest $request)
    {
      // $task=request()->validate([
      //   'title'=>'required | min:3',
      //   'description'=>'required'
      // ]);
      // $task=request()->all();
      Task::create($request->all());

      // session()->flash('success','Your task was created');
      return back()->with('success','Your task was created');

    }

    public function show(Task $task)
    {
      // dd($task);
      // $task=Task::find($task);
      return view('tasks.show',compact('task'));
    }

    public function edit(Task $task)
    {
      // $subjects=Subject::all();
      return view('tasks.edit',compact('task'));
      // dd($task);
    }

    public function update(Task $task, TaskRequest $request)
    {
      // $module=request()->validate([
      //   'title'=>'required | min:3',
      //   'description'=>'required'
      // ]);
      $task->update($request->all());

      // $task->update([
      //   'title'=>request('title'),
      //   'description'=>request('description')
      // ]);
      return redirect("/tasks/{$task->id}")->with('success','Update was successful!');
    }

    public function delete(Task $task)
    {
      $task->delete();
      return redirect("/tasks")->with('success','Your task was deleted');
    }

}
