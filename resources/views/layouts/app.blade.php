<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- this is style part --}}
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: #fff;
        }

        h1 {
            font-size: 36px;
            margin: 0;
            margin-top: 50px;
        }

        .btn-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 50px auto;
            max-width: 800px;
        }

        .btn-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 150px;
            margin: 20px;
            font-size: 24px;
            color: #fff;
            border-radius: 10px;
            background-color: #007bff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            cursor: pointer;
        }

        .btn-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-card i {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .btn-card-text {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .total-users {
            display: inline-block;
            background-color: #f39c12;
            color: #fff;
            border-radius: 10px;
            padding: 8px 12px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Our Home Page!</h1>
    </header>
    <div class="btn-container">
        <a href="{{url('schoolclass')}}">
            <div class="btn-card" onclick="redirectTo('schoolclass')">
                <i class="fas fa-users"></i>
                <div class="btn-card-text">Class</div>
                <div class="total-users">{{ $totalusers }} </div>
            </div>
        </a>
 <a href="{{url('schoolstudents')}}">
    <div class="btn-card" onclick="redirectTo('schoolstudents')">
    <i class="fas fa-user-graduate"></i>
    <div class="btn-card-text">Student</div>
    <div class="total-users">{{  $totalstudent }} </div>
</div></a>
        
    </div>
    <div class="row">
        <div>
            @if(session()->has('success_message'))
                <div>
                    {{session('success_message')}}
                </div>
            @endif
            @if(session()->has('error_message'))
                <div>
                    {{session('error_message')}}
                </div>
            @endif
            @if(session()->has('info_message'))
                <div>
                    {{session('info_message')}}
                </div>
            @endif
        </div>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
