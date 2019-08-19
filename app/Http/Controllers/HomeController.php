<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Task;
class HomeController extends Controller
{
    //
    public function index(){
      $tasks=Task::get();
      return view('home',compact('tasks'));
    }
}
