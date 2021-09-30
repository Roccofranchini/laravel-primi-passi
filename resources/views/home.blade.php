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
            <li><a href="{{ route('home') }}">{{$links[0]}}</a></li>
            <li><a href="{{ route('gallery') }}">{{$links[1]}}</a></li>
            <li><a href="{{ route('contacts') }}">{{$links[2]}}</a></li>
            <li><a href="{{ route('chisiamo') }}">{{$links[3]}}</a></li>
        </ul>
    </header>
    <h1>{{$message}}</h1>
</body>
</html>


<style>
    header {
        padding: 20px 100px;
        box-shadow: 5px 5px 10px 0px #000000;

    }
    h1 {
        color: red;
        text-align: center;
        margin-top: 30px;
    }
    ul { 
        display: flex;
        justify-content: space-between;
    }
    li {
        display: inline-block;
        list-style-type: none;
    }
    a {
        text-decoration: none;
        color: black;
        text-transform: uppercase;
        font-size: 30px;
    }
</style>