@extends('layouts.app')

@section('title',$task->title)

@section('content')

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-md-6">

          <h1>{{ $task->title }} </h1>

          <ul class="list-inline">

            <li class="list-inline-item"> <small class="text-primary">{{$task->subject->name}}</small> </li>
            <li class="list-inline-item"> <small>{{$task->created_at->format("D M Y")}}</small> </li>

          </ul>

          <hr>
          <div class="task-description">

            {{$task->description}}

          </div>

          <ul class="list-inline">
            <li class="list-inline-item"><a href="/tasks">Back</a></li>
            <li class="list-inline-item"><a href="/tasks/{{$task->id}}/edit">Edit</a></li>
            <li class="list-inline-item">
              <form class="form-group" action="/tasks/{{$task->id}}/delete" method="post">
                @csrf
                @method("DELETE")
                <button type="submit" name="button" class="btn btn-danger">Delete</button>

              </form>
            </li>
          </ul>

      </div>


    </div>

  </div>

@endsection
