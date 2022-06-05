<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    {{ $css ?? "" }}
    <title>{{ $title ?? "" }}</title>
</head>
<body>
    <div class="sidebar">
        <div class="profile">
            <i class="fi fi-sr-user"></i>
            <h2>{{ $profile ?? "" }}</h2>
            <span class="date">{{ $date }}</span>
        </div>

        <nav>
            {{ $itemNavbar ?? "" }}
        </nav>

        <a href="/logout" class="btn-logout">
            <i class="fi fi-sr-sign-out"></i>
            <span>Logout</span>
        </a>             
        
    </div>

    <div class="main">
        {{ $searchBar ?? ""}}
        
        {{ $content ?? ""}}
    </div>
</body>
</html>