<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Detail</title>
</head>
<body>
    <h1>Book Detail</h1>
    
        <div>
            <label for="">Book Name:</label>
            <input type="text" name="name" value="{{$book->name}}" placeholder="" readonly />
        </div>
        <div>
            <label for="">Author Name:</label>
            <input type="text" name="author" placeholder="" value="{{$book->author}}" readonly/>
        </div>
        <div>
            
     <a href="{{route('book.index')}}" >Back</a>
        </div>
</body>
</html>