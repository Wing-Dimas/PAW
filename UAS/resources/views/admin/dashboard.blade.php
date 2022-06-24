<x-admin-layouts>
    @slot('title', "Dashboard")

    @slot('content')
        <h1 class="title-page">Dashboard</h1>
        <div class="cards">
            <div class="card">
                <div class="icon"><i class="fi fi-sr-users-alt"></i></div>
                <div class="description">
                    <h5>Users</h5>
                    <span class="number">{{ $totalUser }}</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-man-head"></i></div>
                <div class="description">
                    <h5>Admin</h5>
                    <span class="number">{{ $totalAdmin }}</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-head-side-thinking"></i></div>
                <div class="description">
                    <h5>Staff</h5>
                    <span class="number">{{ $totalStaff }}</span>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fi fi-sr-smile"></i></div>
                <div class="description">
                    <h5>Student</h5>
                    <span class="number">{{ $totalStudent }}</span>
                </div>
            </div>
        </div>
    @endslot
</x-admin-layouts>