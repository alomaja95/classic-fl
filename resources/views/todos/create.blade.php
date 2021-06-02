@extends('todos.layout')

@section('content')
    <h1 class="text-2xl">what next you want to do</h1>
        <x-alert />
        <form action="/todos/create" method="POST" class="py-5">
         @csrf
            <input type="text" name="title" class="py-2 px-2 border rounded" />
            <input type="submit" value="create" class="p-2 border rounded" />
        </form>

@endsection


{{--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">--}}
{{--    <meta name="viewport" content="width=device-wiedth, initial-scale=1.0">--}}
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"--}}
{{--          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="--}}
{{--          crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--    <title>Todos</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="text-center pt-10">--}}
{{--    <h1 class="text-2xl">what next you want to do</h1>--}}
{{--    <x-alert />--}}
{{--    <form action="/todos/create" method="POST" class="py-5">--}}
{{--     @csrf--}}
{{--        <input type="text" name="title" class="py-2 px-2 border rounded" />--}}
{{--        <input type="submit" value="create" class="p-2 border rounded" />--}}
{{--    </form>--}}
{{--</div>--}}

{{--<a href="/todos" class="btn btn-primary">Back</a>--}}

{{--</body>--}}
{{--</html>--}}