<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
//        return $todos;
        return view('todos.index')->with(['todos' => $todos]);
    }
    public function create()
    {
        return view('todos.create');
    }
    public function edit(Todo $todo)
    {
//        dd($todo->title);
//        $todo = Todo::find($id);
//        return $todo;
        return view('/todos.edit', compact('todo'));
    }
    public function store(TodoCreateRequest $request)
    {

        Todo::create($request->all());
        return redirect()->back()->with('message','Todo list created successfully.');
    }
    public function update(TodoCreateRequest $request, Todo $todo)
    {
      $todo->update(['title' => $request->title]);
      return redirect(route('todo.index'))->with('message', 'updated!');
        //update todo
    }
}
