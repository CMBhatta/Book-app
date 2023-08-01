@extends('layouts.app')
@section('content')
<h1>Class</h1>
    
    <div class="button-container">
        <!-- Adding a button with a link to a route -->
        <a href="{{ url('schoolclass/create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
            @foreach($schoolclasses as $student)
            <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->level}}</td>
            <td>
            <a href="{{url('schoolclass/'.$student->id.'/edit')}}">Edit</a>
            <form method="post" action="{{url('schoolclass', $student->id)}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                    </form>
            </td>
            </tr>
            @endforeach

        </table>
    </div>
@endsection