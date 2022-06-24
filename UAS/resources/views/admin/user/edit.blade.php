<x-admin-layouts>
    @slot('title', "Create")

    @slot('content')
        <h1 class="title-page">Update User</h1>

        <form action="{{ route("admin.update", $user->id) }}" method="post">
            @csrf
            @method('put')
            <div class="forms">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{  $user->email ?? old("email")}}">
                    @error('email')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="{{  $user->username?? old("username") }}">
                    @error('username')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="{{old("password") }}">
                    @error('password')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role">
                        <option value="admin" {{  $user->role == "admin" ? "selected" : ""}} {{ old("role") == "admin" ? "selected" : ""}}>Admin</option>
                        <option value="staff" {{  $user->role == "staff" ? "selected" : "" }} {{ old("role") == "staff" ? "selected" : ""}}>Staff</option>
                        <option value="student" {{  $user->role == "staff" ? "selected" : "" }} {{ old("role") == "student" ? "selected" : "" }}>Student</option>
                    </select>
                    @error('role')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="btn"><button class="btn-tambah">Edit</button></div>
        </form>
    @endslot
</x-admin-layouts>