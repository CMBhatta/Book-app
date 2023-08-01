<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <h1>Books</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <a href="{{route('book.create')}}">Add New</a>

    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Action</th>
                
               
            </tr>
            @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td>
                    <a href="{{route('book.edit',['book'=>$book])}}">Edit</a>
                    <a href="{{route('book.show',['id'=>$book->id])}}">Show</a>
        
                    <form method="post" action="{{route('book.destroy', ['details'=>$details])}}">
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