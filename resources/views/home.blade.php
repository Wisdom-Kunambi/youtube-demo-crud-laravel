<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing 123</title>
</head>
<body>
    <div style="border: 3px solid black">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <input type="text" placceholder="Name">
            <input type="text" placceholder="Email">
            <input type="password" placceholder="Password">
            <button>Register</button>
        </form>

    </div>
</body>
</html>