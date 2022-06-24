<x-staff-layouts>
    @slot('title', "Dashboard")

    @slot('content')
        <h1 class="title-page">Dashboard</h1>

        <div class="cards">
            <div class="card">
                <div class="icon"><i class="fi fi-sr-folder"></i></div>
                <div class="description">
                    <h5>Voting</h5>
                    <span class="number">{{ $total_voting }}</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-settings"></i></div>
                <div class="description">
                    <h5>Prepare</h5>
                    <span class="number">{{ $total_prepare }}</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-megaphone"></i></div>
                <div class="description">
                    <h5>Open</h5>
                    <span class="number">{{ $total_open }}</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-ban"></i></div>
                <div class="description">
                    <h5>Closed</h5>
                    <span class="number">{{ $total_close }}</span>
                </div>
            </div>
        </div>
    @endslot
</x-staff-layouts>