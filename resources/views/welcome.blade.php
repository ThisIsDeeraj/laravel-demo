<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{!! $name !!} logged in at: {{ $time }}</h1>
    {{-- 
    <h2>{{ $animal->type }}</h2>
    <h2>{{ $animal->name }}</h2> --}}
    @foreach ($animals as $index => $animal)
        <h3> {{ $index }} : {{ $animal->type }}</h3>
    @endforeach
<hr>
    @foreach ($animals as $index => $animal)
    <pre>{{ $animal }}</pre>
        <h3> {{ $animal->type }}</h3>
        <h3> {{ $animal->name }}</h3>
        <h3> {{ $animal->age }}</h3>
    @endforeach

<a href="{{ route('user-register') }}">Register Now</a>
</body>

</html>
