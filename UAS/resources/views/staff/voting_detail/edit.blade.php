<x-staff-layouts>
    @slot('title', "Update")

    @slot('content')
        <h1 class="title-page">Update Kandidat</h1>

        <form action="{{ route("voting_detail.update", $votingDetail->id) }}" method="post">
            @csrf
            @method('put')
            <div class="forms">
                <div class="form-group">
                    <label for="header">Header</label>
                    <input type="text" name="header" id="header" value="{{ old("header") ?? $votingDetail->header }}">
                    @error('header')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="voting_details_description">Description</label>
                    <input type="text" name="voting_details_description" id="voting_details_description" value="{{ old("voting_details_description") ?? $votingDetail->voting_details_description }}">
                    @error('voting_details_description')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="btn"><button class="btn-tambah">Edit</button></div>
        </form>
    @endslot
</x-staff-layouts>