

    @if ($tasks->count())

      <h1 class="text-danger">All tasks</h1>
      <hr>

      <ol>

          @foreach($tasks as $task)

            <li title="{{$task->description}}"><a href="/tasks/{{$task->id}}">{{$task->title}}</a></li>

          @endforeach

      </ol>
    @else
      <div class="alert alert-info">You don't have any tasks !</div>


    @endif
