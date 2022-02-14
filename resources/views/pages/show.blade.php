@extends('layouts.default')
@section('content')
    title: {{$task->title}}
    content: {{$task->content}}
    status_id: {{$task->status_id}}
@stop<?php
