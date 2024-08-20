<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REST API Demo</title>
</head>

<body>
    <h1>Rest Api GET Demo</h1>

    <form action="/rest-api-get-data" method="get">
        <label for="">Email</label>
        <input name="email" type="text">

        <br>
        <br>

        <label for="">Password</label>
        <input name="password" type="password">

        <br>

        <br>
        <button type="submit">Submit</button>
    </form>
    <hr>
    <br>
    <br>
    <hr>
    <h1>Rest Api POST Demo</h1>

    <form action="/rest-api-post-data" method="post">
        @csrf
        <label for="">Email</label>
        <input name="email" type="text">

        <br>
        <br>

        <label for="">Password</label>
        <input name="password" type="password">

        <br>

        <br>
        <button type="submit">Submit</button>
    </form>
    <h1>Rest Api PUT/DELETE Demo</h1>

    <form action="/rest-api-post-data" method="post">
        @csrf
        {{-- @method('PUT') --}}
        {{-- @method('PATCH') --}}
        {{-- @method('DELETE') --}}
        <label for="">Email</label>
        <input name="email" type="text">

        <br>
        <br>

        <label for="">Password</label>
        <input name="password" type="password">

        <br>

        <br>
        <button type="submit">Submit</button>
    </form>
<hr>
<hr>


    {{-- dog walk form  --}}
    <h2> get method</h2>
    <form action="/walk">
        <button type="submit">submit</button>
    </form>
    <hr>


    
    <br>
    <h2> post method</h2>
    <form action="/walk" method="POST">
        @csrf
        <button type="submit">submit</button>
    </form>

    <a href="https://google.com">Visit Google</a>
</body>

</html>
