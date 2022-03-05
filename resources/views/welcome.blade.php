<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>Document</title>
</head>
<body>


    <h1 class="text-center my-3">Laravel Model Controllers</h1>

    <div class="container">
        <div class="row justify-content-around my-5">
            @foreach ($data as $movie)
            <div class="card justify-content-center col-2 my-3 mx-2  py-2 ">
                
                <h5>{{$movie["title"]}}</h5>
                <strong> Original Title: {{$movie["original_title"]}}</strong>
                <strong>{{$movie["date"]}}</strong>
                <span>Original language: {{$movie["nationality"]}}</span>
                <span>Vote: {{$movie["vote"]}}</span>

            </div>
            @endforeach
        </div>
    </div>
</body>
</html>