@extends('layouts.app')

@section('title',$task->title)

@section('content')

<div class="container">
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1>Edit Task: <a href="/tasks/{{$task->id}}">{{$task->title}}</a></h1>
    <hr>

    <form class="form-group" action="/tasks/{{$task->id}}/edit" method="post">
      @csrf
      @method("PUT")
      @include("tasks.partials.form",[
        'submit_button'=>'Update'
      ])


    </form>

  </div>

</div>

</div>

@endsection
