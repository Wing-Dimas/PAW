<x-staff-layouts>
    @slot('title', "Voting")

    @slot('content')
        <h1 class="title-page">Data Voting</h1>
        <a href="{{ route("voting.create") }}" class="btn-tambah"><i class="fi fi-sr-plus"></i> Tambah</a>
        
         <table id="table-voting" class="display table">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th width="300px">Title</th>
                    <th>Categorie</th>
                    <th>Created By</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($votings as $voting)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $voting->title }}</td>
                    <td>{{ $voting->name_categorie }}</td>
                    <td>{{ $voting->created_by }}</td>
                    <td>{{ $voting->voting_status }}</td>
                    <td class="action-voting">
                        <a href="{{ route("voting.show", $voting->id) }}" class="btn-detail"><i class="fi fi-sr-info"></i>Show Detail</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endslot
</x-staff-layouts>