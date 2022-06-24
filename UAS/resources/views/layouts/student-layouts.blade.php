<x-app-layouts>
    @slot('css')
        <link rel="stylesheet" href="/css/student.css">        
    @endslot

    @slot('title')
        {{ $title }} | Student
    @endslot

    @slot('itemNavbar')
        <ul>
            <li {{ $title == "Home" ? 'class=active' : "" }}>
                <a href="/student">
                    <i class="fi fi-sr-home"></i><span>Home</span>
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
        {{ $searchBar ?? "" }}
    @endslot
    
    @slot('content')
        {{ $content ?? "test"}}
    @endslot
</x-app-layouts>