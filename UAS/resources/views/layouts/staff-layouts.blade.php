<x-app-layouts>
    @slot('css')
        <link rel="stylesheet" href="/css/staff.css">        
    @endslot

    @slot('title')
        {{ $title }} | Staff
    @endslot

    @slot('itemNavbar')
        <ul>
            <li {{ $title == "Dashboard" ? 'class=active' : "" }}>
                <a href="{{ route("staff.index") }}">
                    <i class="fi fi-sr-tachometer-alt-slow"></i><span>Dashboard</span>
                </a>
            </li>
            <li {{ $title == "Voting" ? 'class=active' : "" }}>
                <a href="{{ route("voting.index") }}">
                    <i class="fi fi-sr-box"></i><span>Voting</span>
                </a>
            </li>
         </ul>
    @endslot

    @slot('searchBar')
        
    @endslot
    
    @slot('content')
        {{ $content ?? "test"}}
    @endslot
</x-app-layouts>