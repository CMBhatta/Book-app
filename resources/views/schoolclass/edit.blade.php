@extends('layouts.app')
@section('content')
<h1>Class Update</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    <form action="{{url('schoolclass',$schoolclass->id)}}" method="post">
        @csrf 
        @method('PUT')
        <div>
        <label for="">Name:</label>
        <input type="text" name = "name" placeholder="Class Name" required value="{{$schoolclass->name}}" />
        </div>
        <label for="">Level:</label>
        <input type="number" name = "level" required value="{{$schoolclass->level}}"/>
        </div>
        <div>
            <input type="Submit" value="Update">
            <a href="{{url('schoolclass')}}">Back</a>
        </div>
    </form>
@endsection