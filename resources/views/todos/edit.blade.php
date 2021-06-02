<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-wiedth, initial-scale=1.0">
    <title>Todos</title>
</head>
<body>
<div class="text-center pt-10">


    <h1>Update this to-do</h1>
    <x-alert />
    <form action="{{route('todo.update',$todo->id)}}" method="POST" class="py-5">

        @csrf
        @method('patch')
        <input type="text" value="{{$todo->title}}" name="title" />
        <input type="submit" value="Edit/Update" class="p-2 border rounded-lg"/>
    </form>
</div>

<a href="/todos" class="btn btn-primary">Back</a>
</div>

</body>
</html>


