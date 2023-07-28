<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Book</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    <form action="{{route('book.update',['book'=> $book])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">Book Name:</label>
            <input type="text" name="name" placeholder="" value="{{$book->name}}"/>
        </div>
        <div>
            <label for="">Author Name:</label>
            <input type="text" name="author" placeholder="" value="{{$book->author}}"/>
        </div>
        <div>
            <input type="submit" value="Update"/>
            <input type="submit" value="Back"/>

        </div>
    </form>
</body>
</html>