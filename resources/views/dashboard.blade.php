
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Staff Table') }}
        </h2>

    </x-slot>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-left mb-5">
        {{ __("Welcom :")  }}
        {{auth()->user()->name}}

    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        td{border-bottom:2px solid gray}
        </style>

    <title>Document</title>
</head>
<body>
<table style="width: 100%">
<tr >
    <th>ID</th>
    <th>Name</th>
    <th>Title</th>
    <th>Phone Number</th>
    <th>Age</th>
    <th>job title</th>
    <th>Option</th>
</tr>
@php
$x=0;
@endphp
@foreach ($emp as $mp)
@php
$x++;
@endphp
<tr style="text-align: center">
    <td>{{$x}}</td>
    <td>{{$mp->name}}</td>
    <td>{{$mp->title}}</td>
    <td>{{$mp->phone}}</td>
    <td>{{$mp->age}}</td>
    <td>{{$mp->job}}</td>
    <td>

    <a href="{{route('emp.edit',$mp->id)}}"> EDIT </a>
    <form action="{{route('emp.destroy',$mp->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" style="color: red" onclick="return confirm('are you sure about that')">DELETE</button>
    </form>
    </td>
</tr>

@endforeach
</table>
</body>
</html>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-left:12%">
        <h1 style="color:green">Add New Employe<h1>



    <form action="{{route('emp.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Name" required>

        <input type="text" name="title" placeholder="Enter Tiltle" required>
        <input type="number" name="age" placeholder="Enter Age" max="99" min="18" style="width:9%" required>
        <input type="number" name="phone" placeholder="Enter Number Phone" style="width:20%" required>
        <input type="text" name="job" placeholder="Enter Job" required>
        <button style="color:green ;border:1px solid gold ;padding:5px">DONE</button>


        </form>
    </div>
</x-app-layout>

