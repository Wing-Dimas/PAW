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

        <form action="{{ route("logout") }}" method="post">
            @csrf
            <button class="btn-logout"><i class="fi fi-sr-sign-out"></i> Logout</button>
        </form>             
        
    </div>

    <div class="main">
        {{ $searchBar ?? ""}}
        
        {{ $content ?? ""}}
    </div>

    <script src="\js\jquery-3.6.0.min.js"></script>
</body>
</html>