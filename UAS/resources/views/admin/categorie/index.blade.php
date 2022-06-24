<x-admin-layouts>
    @slot('title', "Kategory")

    @slot('content')
        <h1 class="title-page">Data Categorie</h1>
        <a href="{{ route("categorie.create") }}" class="btn-tambah"><i class="fi fi-sr-plus"></i> Tambah</a>

        <table id="table-categorie" class="display table">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th width="200px">name</th>
                    <th width="250px">create at</th>
                    <th width="250px">update at</th>
                    <th width="80px">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $categorie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $categorie->name_categorie }}</td>
                    <td>{{ $categorie->created_at }}</td>
                    <td>{{ $categorie->updated_at }}</td>
                    <td class="action">
                        <a href="{{ route("categorie.edit", $categorie->id) }}" class="btn-edit"><i class="fi fi-sr-edit"></i>Edit</a>
                        <form action="{{ route("categorie.destroy", $categorie->id) }}" method="post" class="form-delete">
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