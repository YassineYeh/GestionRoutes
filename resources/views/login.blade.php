<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <form action="{{route('accueil')}}" method='get'>
        <h1>Login</h1><br>
        <input type="text" placeholder='Username' required><br>
        <input type="password" placeholder='Password' required><br>
        <input type="submit" class='submit' value='login'>
        <p>not a member? <a href="{{route('nouveau')}}">Create Account</a></p>
    </form>
</body>
</html>