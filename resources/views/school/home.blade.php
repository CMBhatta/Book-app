<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 36px;
            color: #007bff;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .btn-class, .btn-student {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 150px;
            margin: 10px;
            font-size: 24px;
            color: #fff;
            border-radius: 10px;
            transition: background-color 0.2s;
        }

        .btn-class {
            background-color: #007bff;
        }

        .btn-student {
            background-color: #6c757d;
        }

        .btn-class:hover, .btn-student:hover {
            cursor: pointer;
            background-color: #0056b3;
        }

        .icon {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Welcome to our home page!</h1>
    <div class="container btn-container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('school.index')}}" class="btn btn-class btn-lg">
                    <i class="icon fas fa-users"></i>
                    Class
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{route('school.create')}}" class="btn btn-student btn-lg">
                    <i class="icon fas fa-user-graduate"></i>
                    Student
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
