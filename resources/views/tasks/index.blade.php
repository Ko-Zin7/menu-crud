@extends('layouts.app')

@section('title','Task Page')

@section('content')

  <div class="container">




    <div class="row">
      <div class="col-md-6">
        <h1 class="text-primary">Create a Task</h1>
          <hr>
        <form class="form-group" action="/tasks" method="post" autocomplete="off">
          @csrf

          @include("tasks.partials.form",[
            'task'=>new App\Task,
            'submit_button'=>'Save'
          ])

        </form>

      </div>
      <div class="col-md-6">

        @include("tasks.partials.sidebar")

      </div>

    </div>
  </div>

@endsection
