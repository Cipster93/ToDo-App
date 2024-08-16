@extends('layouts.app')

<h1>New Task</h1>

@section('content')

<div class="newTask">
    <form action="{{ route('store.page') }}" method="post">
        @csrf
        New Task:<br>
        <input type="text" name="task"> <br><br>
        Description:<br>
        <textarea name="description"></textarea> <br><br>
        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
</div>

@endsection