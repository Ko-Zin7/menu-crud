<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Subject;
class SubjectController extends Controller
{
    //
    public function show(Subject $subject)
    {
      // dd($subject);
      $tasks=$subject->tasks()->latest()->get();
      return view('subjects.show',compact('subject','tasks'));
    }
}
