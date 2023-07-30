<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Enter your data</h1>
@if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    <form action="{{route('school.update',['school' => $school])}}" method="post">
        @csrf 
        @method('put')
        <div>
        <label for="">Name:</label>
        <input type="text" name = "name" value="{{$school->name}}"/>
        </div>
        <label for="">Level:</label>
        <input type="text" name = "level" value="{{$school->level}}"/>
        </div>
        <div>
            <input type="Submit" value="Update">
        </div>
    </form>
</body>
</html>