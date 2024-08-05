@extends('layouts.app')

<h1>ToDo App</h1>

@section('content')

<div class="cont-table">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Number</th>
        <th scope="col">Task</th>
        <th scope="col" class="description">Description</th>
        <th scope="col">Edit Task</th>
        <th scope="col">Delete Task</th>
        <th scope="col">Complete Task</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr class="{{ $record->completed ? 'completed' : '' }}">
        <th scope="row">{{$record->id}}</th>
        <td>{{$record->task}}</td>
        <td class="description">{{$record->description}}</td>
        <td>
            @if(!$record->completed)
            <form action="{{ route('edit.page', $record->id) }}" method="get">
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
            @endif
        </td>
        <td>
            <form action="{{ route('destroy.record', $record->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
        <td>
            @if(!$record->completed)
            <form action="{{ route('complete.task', $record->id) }}" method="post">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-success">Complete</button>
            </form>
            @endif
        </td>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
