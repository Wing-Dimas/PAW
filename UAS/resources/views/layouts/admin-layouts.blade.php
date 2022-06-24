<x-app-layouts>
    @slot('css')
        <link rel="stylesheet" href="/css/admin.css">        
    @endslot

    @slot('title')
        {{ $title }} | Admin
    @endslot
    
    @slot('itemNavbar')
        <ul>
            <li {{ $title == "Dashboard" ? 'class=active' : "" }}>
                <a href="{{ route("admin.index") }}">
                    <i class="fi fi-sr-tachometer-alt-slow"></i><span>Dashboard</span>
                </a>
            </li>
            <li {{ $title == "User" ? 'class=active' : "" }}>
                <a href="{{ route("admin.user") }}">
                    <i class="fi fi-sr-document"></i><span>User</span>
                </a>
            </li>
            <li {{ $title == "categorie" ? 'class=active' : "" }}>
                <a href="{{ route("categorie.index") }}">
                    <i class="fi fi-sr-grid"></i><span>Categorie</span>
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