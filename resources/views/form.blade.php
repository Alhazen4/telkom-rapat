<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form test</title>
</head>
<body>
    @if(Session::has('success'))
    {{Session::get('success')}}

        
    @endif
    <form action="/request/1" method="post">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
        <label for="date">Date: </label>
        <input type="date" name="date" id="date">
        <label for="time">Time: </label>
        <input type="time" name="time" id="time">
        <label for="unit">Unit: </label>
        <input type="text" name="unit" id="unit">
        <label for="telephone">Telephone: </label>
        <input type="text" name="telephone" id="telephone">
        <button type="submit">Request Room</button>
    </form>
</body>
</html>