<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users page</title>
</head>
<body>
<h1>Users page</h1>
@foreach($users as $user)
    <p>User Login - {{$user->name}}</p>
@endforeach

</body>
</html>