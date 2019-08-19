@extends('layouts.app')

@section('title',$subject->name)

@section('content')

  <div class="container">

    <div class="col-md-6">
      <h1 class="text-danger">{{$subject->name}}</h1>
      <hr>
      <ol>
          @foreach ($tasks as $task)

            <li> <a href="/tasks/{{$task->id}}">{{$task->title}}</a>  </li>

          @endforeach
      </ol>
    </div>

  </div>

@endsection
