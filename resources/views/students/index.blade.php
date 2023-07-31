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
            @foreach($students as $details)
            <tr>
                <td>{{$details->id}}</td>
                <td>{{$details->name}}</td>
                <td>{{$details->class}}</td>
                <td>{{$details->roll}}</td>
                <td>{{$details->gender}}</td>
                <td>{{$details->address}}</td>
                <td>{{$details->description}}</td>
                <td>
                <a href="{{route('students.edit',['details'=>$details])}}">Edit</a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</body>
</html>