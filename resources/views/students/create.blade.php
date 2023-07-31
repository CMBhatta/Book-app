<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <form action="{{route('students.store')}}" method="post">
        @csrf
        @method('post')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" value="Name">
    </div>
    <div>
        <label for="class">Class:</label>
        <input type="text" name="class" value="Class">
    </div>
    <div>
        <label for="roll">Roll No:</label>
        <input type="text" name="roll" value="roll">
    </div>
    <div>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div>
        <label for="address">Address:</label>
        <input type="text" name="address" value="Address">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <input type="submit" value="submit">
    </div>
    </form>
</body>
</html>