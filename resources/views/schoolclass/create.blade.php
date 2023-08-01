@extends('layouts.app')
@section('content')
<h1>Class</h1>
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
    <form action="{{url('schoolclass')}}" method="post">
        @csrf 
        @method('post')
        <div>
        <label for="">Name:</label>
        <input type="text" name = "name" placeholder="Class Name" required/>
        </div>
        <label for="">Level:</label>
        <input type="number" name = "level" required />
        </div>
        <div>
            <input type="Submit" value="Submit">
            <a href="{{url('schoolclass')}}">Back</a>
        </div>
    </form>
@endsection