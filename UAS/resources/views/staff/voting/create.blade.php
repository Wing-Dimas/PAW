<x-staff-layouts>
    @slot('title', "Create")

    @slot('content')
        <h1 class="title-page">Tambah Voting</h1>

        <form action="{{ route("voting.store") }}" method="post">
            @csrf
            <div class="forms">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ old("title") }}">
                    @error('title')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="voting_description">Description</label>
                    <input type="text" name="voting_description" id="voting_description" value="{{ old("voting_description") }}"">
                    @error('voting_description')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="categorie_id">Categorie</label>
                    <select name="categorie_id" id="categorie_id">
                        @foreach($categories as $categorie)
                            <option value="{{ $categorie->id }}" {{ old("id_categorie") == $categorie->id ? "selected" : ""}}>{{ $categorie->name_categorie }}</option>
                        @endforeach
                    </select>
                    @error('categorie_id')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="btn"><button class="btn-tambah">Tambah</button></div>
        </form>
    @endslot
</x-staff-layouts>