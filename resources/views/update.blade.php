@extends('layouts.app')

@section('content')

<h1>Update page</h1>

<form action="{{ route('update.record', $record->id) }}" method="post">
    @csrf
    @method('PUT')

    New Task:<br>
    <input type="text" name="task" value="{{ old('task', $record->task) }}"> <br><br>
    Description:<br>
    <textarea name="description" value="{{ old('description', $record->description) }}"></textarea> <br><br>

    <button type="submit" class="btn btn-success">Update Task</button>
</form>

@endsection