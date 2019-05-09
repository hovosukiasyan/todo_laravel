@extends('../layouts.app')

@section('content')
<div class="wrapper">
    <div class="post">
        <h1 class="title">All Tasks</h1>
            @foreach ($tasks as $task)
                <div class="post-wrapper-todo">
                    <h3><b>Title : </b> <?= $task->title ?> </h3>
                    <div class="flex">
                        <form method="POST" action="/task/{{ $task->id }}" class="link_push_left">

                            @method('DELETE')
                            @csrf
                            
                            <div class="field">
                    
                                <div class="control">
                                    <button type="submit" class="btn btn-danger delete-post">Delete Post</button>
                                </div>
                            
                            
                            </div>
                        </form>
                        <a href="/task/edit/{{ $task->id }}" class="edit-post link_push_left">Edit Task</a>
                    </div>
                </div>
                
                
            @endforeach
            
    </div>
</div>
@endsection