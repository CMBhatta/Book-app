<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Table</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div class="button-container">
        <!-- Adding a button with a link to a route -->
        <a href="{{ route('school.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
            @foreach($school as $students)
            <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->level}}</td>
            <td>
            <a href="{{route('school.edit',['school'=>$students])}}">Edit</a>
            <form method="post" action="{{route('school.destroy', ['school'=>$students])}}">
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