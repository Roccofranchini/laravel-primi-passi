<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <ul>
            @foreach ($links as $link)
                <li><a href="{{ route($link) }}">{{$link}}</a></li>
            @endforeach
        </ul>
    </header>
    <h1>{{$message}}</h1>
</body>
</html>


<style>
    h1 {
        color: red;
    }
    li {
        display: inline-block;
        list-style-type: none;
    }
</style>