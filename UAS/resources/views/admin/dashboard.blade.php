<x-admin-layouts>
    @slot('title', "Dashboard")

    @slot('profile')
        Administator 1
    @endslot

    @slot('content')
        <div class="cards">
            <div class="card">
                <div class="icon"><i class="fi fi-sr-users-alt"></i></div>
                <div class="description">
                    <h5>Users</h5>
                    <span class="number">9</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-man-head"></i></div>
                <div class="description">
                    <h5>Admin</h5>
                    <span class="number">2</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-head-side-thinking"></i></div>
                <div class="description">
                    <h5>Staff</h5>
                    <span class="number">3</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-smile"></i></div>
                <div class="description">
                    <h5>Student</h5>
                    <span class="number">4</span>
                </div>
            </div>
        </div>
    @endslot
</x-admin-layouts>