@extends('layouts.default')
@section('content')
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        {!! method_field('patch') !!}
        {!! csrf_field() !!}

        <div>
            Title
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="title" name="title" value="{{ $task->title }}">
        </div>

        <div>
            Content
            @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="content" name="content" id="content" value="{{ $task->content }}">
        </div>

        <div>
            status_id
            @error('status_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="status_id" name="status_id" id="status_id" value="{{ $task->status_id }}">
        </div>

        <div>
            <button type="submit">Done</button>
        </div>

    </form>
@stop
