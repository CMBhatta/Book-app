@extends('layouts.app')
@section('content')
    <h1>Students Form</h1>
   <div>
   @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
   </div>
    <form action="{{url('schoolstudents')}}" method="post">
        @csrf
        @method('post')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Name" value="">
    </div>
    <div>
        <label for="class">Class:</label>
        <input type="text" name="class" value="">
    </div>
    <div>
        <label for="roll">Roll No:</label>
        <input type="text" name="roll" value="" placeholder="Roll No.">
    </div>
    <div>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <div>
        <label for="address">Address:</label>
        <input type="text" name="address" value="" placeholder="">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <input type="submit" value="submit">
        <a href="{{url('schoolstudents')}}">Back</a>
    </div>
    </form>
    @endsection