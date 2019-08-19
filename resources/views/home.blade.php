@extends('layouts.app')


@section('content')

  <div class="container">

      <h1>Home Page</h1>
      <hr>
      <ol>
        @foreach($tasks as $task)
        <li>
          <h5 class="text-info">{{$task->title}}</h5>
        </li>
        @endforeach
      </ol>

  </div>

@endsection
