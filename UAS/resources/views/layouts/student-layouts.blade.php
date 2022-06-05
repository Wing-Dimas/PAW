<x-app-layouts>
    @slot('css')
        <link rel="stylesheet" href="/css/student.css">        
    @endslot

    @slot('title')
        {{ $title }} | Student
    @endslot

    @slot('profile')
        {{ $profile }}
    @endslot

    @slot('itemNavbar')
        <ul>
            <li {{ $title == "Dashboard" ? 'class=active' : "" }}>
                <a href="/student">
                    <i class="fi fi-sr-home"></i><span>Dashboard</span>
                </a>
            </li>
            <li {{ $title == "History" ? 'class=active' : "" }}>
                <a href="/student/voting-history">
                    <i class="fi fi-sr-document"></i><span>Voting History</span>
                </a>
            </li>
         </ul>
    @endslot

    @slot('searchBar')
        <div class="search-bar">
            <form action="" method="post">
                <input type="text" name="search" placeholder="Search">
                <button type="submit"><i class="fi fi-sr-search"></i></button>
            </form>
        </div>
    @endslot
    
    @slot('content')
        {{ $content ?? "test"}}
    @endslot
</x-app-layouts>