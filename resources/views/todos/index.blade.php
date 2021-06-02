@extends('todos.layout')

@section('content')

    <div class="flex justify-conter ">
        <h1 class="text-2xl">All your to-dos</h1>
        <a href="/todos/create" class="mx-5 py-2 px-1 bg-blue-300 rounded cursor-pointer text-white ">create New</a>
    </div>
    <ul class="my-5">
        <x-alert/>
        @foreach($todos as $todo)
            <li class="flex justify-between p-2">
                <p>{{$todo->title}}</p>
                <div>
                <a href="{{'/todos/'.$todo->id.'/edit'}}" class="py-1 px-1
bg-orange-400 cursor-pointer rounded text-white">Edit</a>
                    <span class="fas fa-check"/>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

