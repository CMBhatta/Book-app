<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Deatails</title>
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
    <form action="{{route('school.store')}}" method="post">
        @csrf 
        @method('post')
        <div>
        <label for="">Name:</label>
        <input type="text" name = "name" value="name"/>
        </div>
        <label for="">Level:</label>
        <input type="text" name = "level" value="level"/>
        </div>
        <div>
            <input type="Submit" value="Submit">
        </div>
    </form>
</body>
</html>