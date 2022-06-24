<x-student-layouts>
    @slot('title', "Home")

    @slot('searchBar')
        <div class="search-bar">
            <form action="" method="post">
                <input type="text" name="search" placeholder="Search">
                <button type="submit"><i class="fi fi-sr-search"></i></button>
            </form>
        </div>
    @endslot

    @slot('content')
        <div class="content-wrapper">
            <section>
                <div class="list-voting">
                @if(count($votings) == 0)
                    <div class="card">
                        <h2>No Voting today</h2>
                    </div>
                @endif
                @foreach($votings as $voting)
                    
                    <div class="card">
                        <div class="description-list-voting">
                            <h2>{{ $voting->title }}</h2>
                            <div class="date">
                                <span>Categorie</span>
                                <span>{{ $voting->name_categorie }}</span>
                            </div>
                        </div>
                        <div class="footer-voting">
                            <button class="btn-voting" data-voting-id="{{ $voting->id }}">Voting</button>
                        </div>
                    </div>
                @endforeach
                </div>
            </section>

            <div class="show-detail-voting">
                <div>No Voting Selected</div>
            </div>
        </div>
    @endslot
</x-student-layouts>