<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="name" name="name">
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit">Register</button>
    </form>
</body>
</html>
