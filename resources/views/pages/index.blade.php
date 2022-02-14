@extends('layouts.default')
@section('content')
    @foreach($tasks as $task)
        <br><a href="{{ route('tasks.edit', $task->id) }}"><p>{{ $task->title }}</p></a>
    @endforeach
@stop
