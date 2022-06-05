<x-staff-layouts>
    @slot('title', "Voting")

    @slot('profile')
        Staff 1
    @endslot

    @slot('content')
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Create By</th>
                    <th>Create At</th>
                    <th>closed At</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pemilihan Ketua UKM-FT</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quas.</td>
                    <td>Wing</td>
                    <td>15-04-2002</td>
                    <td></td>
                    <td>Open</td>
                    <td class="action-voting">
                        <a href="" class="btn-edit"><i class="fi fi-sr-edit"></i>Edit</a>
                        <a href="" class="btn-detail"><i class="fi fi-sr-list"></i>Details</a>
                        <a href="" class="btn-close"><i class="fi fi-sr-power"></i>Close</a>
                        <form action="" method="post" class="form-delete">
                            <button type="submit" class="btn-delete"><i class="fi fi-sr-trash"></i>Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    @endslot
</x-staff-layouts>