<x-staff-layouts>
    @slot('title', "Update")

    @slot('content')
        <h1 class="title-page">Update Voting</h1>

        <form action="{{ route("voting.update", $voting->id) }}" method="post">
            @csrf
            @method('put')
            <div class="forms">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ $voting->title ?? old("title")}}">
                    @error('title')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="voting_description">Description</label>
                    <input type="text" name="voting_description" id="voting_description" value="{{ old("voting_description") ?? $voting->voting_description }}">
                    @error('voting_description')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="categorie_id">Categorie</label>
                    <select name="categorie_id" id="categorie_id">
                        @foreach($categories as $categorie)
                            <option value="{{ $categorie->id }}" {{ ($voting->categorie_id == $categorie->id  ? "selected" : "") }}>{{ $categorie->name_categorie }}</option>
                        @endforeach
                    </select>
                    @error('categorie_id')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="btn"><button class="btn-tambah">Edit</button></div>
        </form>
    @endslot
</x-staff-layouts>