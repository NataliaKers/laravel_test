<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@include('header')
<form action="{{route('create_user')}}" method="post">
    @csrf
    <input name="email" type="text" placeholder="email"/>
    <input name="name" type="text" placeholder="name"/>
    <input name="password" type="password" placeholder="password"/>
    <button type="submit">Ok</button>
</form>
</body>
</html>
