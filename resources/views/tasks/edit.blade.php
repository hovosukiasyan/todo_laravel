@extends('../layouts.app')

@section('content')
<div class="wrapper">
    <h1 class="title">Edit Task</h1>   

    <form method="POST" action="/task/{{ $task->id }}">

        @method('PATCH')
        @csrf

        <div class="field">
        
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" name="title" placeholder="Title" class="input" value="{{ $task->title }}">
            </div>
            @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
        
        </div>


        <div class="field">
        
            <div class="control">
                <button type="submit" class="button is-link">Update Post</button>
            </div>
        
        </div>

        

    </form>

</div>

@endsection