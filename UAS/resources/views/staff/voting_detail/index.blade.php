<x-staff-layouts>
    @slot('title', "Voting Detail")

    @slot('content')
        {{-- INFO --}}
        <h1 class="title-page">{{ $voting->title }}</h1>
        <span class="badge-{{  $voting->voting_status == "open" ? "open" : ($voting->voting_status == "close" ? "close" : "prepare") }}">{{ $voting->voting_status }}</span>
        <br><br>
        <h4>Date</h4>
        <div class="tanggal">
            <span class="created_at">Created At : {{ $voting->created_at }}</span><br>
            <span class="created_at">Closed At : {{ $voting->voting_status == "close" ? $voting->updated_at : "-" }}</span>
        </div>
        <br>
        <h4>Description</h4>
        <p class="description-voting">
            {{ $voting->voting_description }}
        </p>
        
        @if($voting->voting_status == "close")
            <a href="{{ route("voting.print", $voting->id) }}" target="_blank" class="btn-print">Print PDF</a>
        @endif
        @if($voting->voting_status == "prepare")
            <a href="{{ route("voting.open", $voting->id) }}" class="btn-open show-confirm-open-voting">Open</a>
            <a href="{{ route("voting.edit", $voting->id) }}" class="btn-edit-voting">Edit</a>
        @endif
        @if(in_array($voting->voting_status, ["prepare", "close"]))
            <form action="{{ route("voting.destroy", $voting->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn-delete-voting show-confirm-delete-voting">Hapus</button>
            </form>
        @endif
        @if($voting->voting_status == "open")
            <a href="{{ route("voting.close", $voting->id) }}" class="btn-close show-confirm-close-voting">Close</a>
        @endif

        <hr>
        <br>

        {{-- TABLE --}}
        @if($voting->voting_status == "prepare")
            <a href="{{ route("voting_detail.create", $voting->id) }}" class="btn-tambah"><i class="fi fi-sr-plus"></i> Tambah</a>
        @endif
         <table id="table-voting-detail" class="display table">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th width="250px">Header</th>
                    <th width="300px">Description</th>
                    <th>voted</th>
                    @if($voting->voting_status == "prepare")
                        <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($voting_details as $voting_detail)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $voting_detail->header }}</td>
                    <td>{{ $voting_detail->voting_details_description }}</td>
                    <td>{{ $voting_detail->voted }}</td>
                    @if($voting->voting_status == "prepare")
                        <td class="action">
                            <a href="{{ route("voting_detail.edit", $voting_detail->id) }}" class="btn-edit"><i class="fi fi-sr-edit"></i> Edit</a>
                            <form action="{{ route("voting_detail.destroy", $voting_detail->id) }}" method="post" class="form-delete form">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-delete show-confirm"><i class="fi fi-sr-trash"></i>Delete</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    @endslot
</x-staff-layouts>