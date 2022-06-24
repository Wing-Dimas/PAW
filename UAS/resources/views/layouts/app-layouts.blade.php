<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset("/favicon.ico") }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">
    {{ $css ?? "" }}
    <title>{{ $title ?? "" }}</title>
</head>
<body>
    <div class="sidebar">
        <div class="profile">
            <i class="fi fi-sr-user"></i>
            <h2>{{ auth()->user()->username }}</h2>
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

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/script.js"></script>

    <script>
    $(function(){
    @if(Session::has('success'))
        Swal.fire({
            icon: 'success',
            title: 'Data {{ Session::get("data") }}',
            text: '{{ Session::get("success") }}'
        });
    @elseif(Session::has('error'))
        Swal.fire({
            icon: 'error',
            title: 'Data {{ Session::get("data") }}',
            text: '{{ Session::get("error") }}'
        });
    @endif
    });
</script>
</body>
</html>