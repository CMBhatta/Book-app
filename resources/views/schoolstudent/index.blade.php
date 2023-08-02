@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Student Details</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
        <div class="button-container">
            <!-- Adding a button with a link to a route -->
            <a href="{{url('schoolstudents/create')}}" class="btn btn-primary">Add New</a>
        </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Roll No</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach($schoolstudents as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->roll}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->description}}</td>
                <td>
                    <a href="{{url('schoolstudents/'.$student->id.'/edit')}}">Edit</a>
                    <form method="post" action="{{url('schoolstudents', $student->id)}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete"/>
                            </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</body>
</html>
@endsection