@extends('layouts.app')
@section('content')
    <h1>Students Update</h1>
   <div>
   @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
   </div>
    <form action="{{url('schoolstudents',$schoolstudents->id)}}" method="post">
        @csrf
        @method('put')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{$schoolstudents->name}}">
    </div>
    <div>
        <label for="class">Class:</label>
        <select name="class" id="class">
            @foreach($schoolclasses as $schoolclass)
                <option value="{{ $schoolclass->id }}" @if($schoolclass->id === $schoolstudents->class_id) selected @endif>{{ $schoolclass->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="roll">Roll No:</label>
        <input type="text" name="roll" value="{{$schoolstudents->roll}}">
    </div>
    <div>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="Male" @if($schoolstudents->gender === 'Male') selected @endif>Male</option>
            <option value="Female" @if($schoolstudents->gender === 'Female') selected @endif>Female</option>
            <option value="Other" @if($schoolstudents->gender === 'Other') selected @endif>Other</option>
        </select>
    </div>
    
    <div>
        <label for="address">Address:</label>
        <input type="text" name="address" value="{{$schoolstudents->roll}}">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" value="{{$schoolstudents->description}}"></textarea>
    </div>
    <div>
        <input type="submit" value="Update">
        <a href="{{url('schoolstudents')}}">Back</a>
    </div>
    </form>
@endsection