<x-admin-layouts>
    @slot('title', "Create")

    @slot('content')
        <h1 class="title-page">Update Kategory</h1>

        <form action="{{ route("categorie.update", $categorie->id) }}" method="post">
            @csrf
            @method('put')
            <div class="forms">
                <div class="form-group">
                    <label for="name_categorie">Name Categorie</label>
                    <input type="text" name="name_categorie" id="name_categorie" value="{{ old("name_categorie") ?? $categorie->name_categorie}}">
                    @error('name_categorie')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="btn"><button class="btn-tambah">Edit</button></div>
        </form>
    @endslot
</x-admin-layouts>