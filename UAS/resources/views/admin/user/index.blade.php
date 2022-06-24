<x-admin-layouts>
    @slot('title', "User")

    @slot('content')
        <h1 class="title-page">Data User</h1>
        <a href="{{ route("admin.create") }}" class="btn-tambah"><i class="fi fi-sr-plus"></i> Tambah</a>

        <table id="table-admin" class="display table">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th width="200px">Username</th>
                    <th width="250px">Email</th>
                    <th width="100px">Role</th>
                    <th width="80px">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td class="action">
                        <a href="{{ route("admin.edit", $user->id) }}" class="btn-edit"><i class="fi fi-sr-edit"></i>Edit</a>
                        <form action="{{ route("admin.destroy", $user->id) }}" method="post" class="form-delete">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn-delete show-confirm"><i class="fi fi-sr-trash"></i>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endslot
</x-admin-layouts>