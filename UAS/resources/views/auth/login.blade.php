<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="form">
        <form action="{{ route("login.store") }}" method="post">
            @csrf
            <h1>Login</h1>
            <div class="form-group">
                <input type="text" name="email" type="email" placeholder="Email">
                <input type="password" name="password" type="email" placeholder="Password">
                <div class="btn">
                    <button>Login</button>
                </div>
            </div>
        </form>
    </div>
    <img src="/img/voting-vector.png" alt="voting-vector">
</body>
</html>