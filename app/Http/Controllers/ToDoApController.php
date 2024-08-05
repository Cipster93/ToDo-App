<?php

namespace App\Http\Controllers;

use App\Models\ToDoApModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ToDoApController extends Controller
{
    public function index()
    {
        $records = ToDoApModel::all();
        return view('home', compact('records'));
    }

    public function create()
    {
        return view('newTask');
    }
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),[
        'task' => 'required|string|max:255',
        'description' => 'required|string|max:255',
       ]);

       $validatedData = $validator->validated();
       $newTask = new ToDoApModel($validatedData);
       $newTask->save();

       return redirect('/');
    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $record = ToDoApModel::findOrFail($id);
        return view('update', compact('record'));
    }

    public function update(Request $request, string $id)
    {
        $record = ToDoApModel::findOrFail($id);
        $record->update($request->all());

        return redirect('/');
    }

    public function destroy(string $id)
    {
        $record = ToDoApModel::findOrFail($id);
        $record->delete();

        return redirect('/');
    }

    public function complete($id)
    {
        $record = ToDoApModel::findOrFail($id);
        $record->completed = true;
        $record->save();

        return redirect()->back();
    }
}
