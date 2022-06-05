<x-admin-layouts>
    @slot('title', "User")

    @slot('profile')
        Administator 1
    @endslot

    @slot('content')
        <table>
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th width="200px">Username</th>
                    <th>Password</th>
                    <th width="250px">Email</th>
                    <th width="100px">Role</th>
                    <th width="200px">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dimas</td>
                    <td>$1$y%rrlklk3lk3lkkl1k31lk31l31lk3nklnlknlaknsdlaksnd</td>
                    <td>wingdimas@gmail.com</td>
                    <td>Admin</td>
                    <td class="action">
                        <a href="/admin/" class="btn-edit"><i class="fi fi-sr-edit"></i>Edit</a>
                        <form action="" method="post" class="form-delete">
                            <button type="submit" class="btn-delete"><i class="fi fi-sr-trash"></i>Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Wing</td>
                    <td>$1$y%rrlklk3lk3lkkl1k31lk31l31lk3nklnlknlaknsdlaksnd</td>
                    <td>wingdimas@gmail.com</td>
                    <td>Staff</td>
                    <td class="action">
                        <a href="/admin/" class="btn-edit"><i class="fi fi-sr-edit"></i>Edit</a>
                        <form action="" method="post" class="form-delete">
                            <button type="submit" class="btn-delete"><i class="fi fi-sr-trash"></i>Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    @endslot
</x-admin-layouts>