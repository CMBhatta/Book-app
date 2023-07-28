<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Book</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    <form action="{{route('book.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="">Book Name:</label>
            <input type="text" name="name" placeholder=""/>
        </div>
        <div>
            <label for="">Author Name:</label>
            <input type="text" name="author" placeholder=""/>
        </div>
        <div>
            <input type="submit" value="Save"/>
            <!-- <input type="submit" value="Back"/> -->
            
<a href="{{route('book.index')}}" >Back</a>
        </div>
    </form>
</body>
</html>