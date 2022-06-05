<x-staff-layouts>
    @slot('title', "Dashboard")

    @slot('profile')
        Staff 1
    @endslot

    @slot('content')
        <div class="cards">
            <div class="card">
                <div class="icon"><i class="fi fi-sr-folder"></i></div>
                <div class="description">
                    <h5>Voting</h5>
                    <span class="number">3</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-megaphone"></i></div>
                <div class="description">
                    <h5>Open</h5>
                    <span class="number">1</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-ban"></i></div>
                <div class="description">
                    <h5>Closed</h5>
                    <span class="number">2</span>
                </div>
            </div>
        </div>
    @endslot
</x-staff-layouts>