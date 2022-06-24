<x-admin-layouts>
    @slot('title', "Create")

    @slot('content')
        <h1 class="title-page">Tambah Kategory</h1>

        <form action="{{ route("categorie.store") }}" method="post">
            @csrf
            <div class="forms">
                <div class="form-group">
                    <label for="name_categorie">Name Categorie</label>
                    <input type="text" name="name_categorie" id="name_categorie" value="{{ old("name_categorie") }}">
                    @error('name_categorie')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="btn"><button class="btn-tambah">Tambah</button></div>
        </form>
    @endslot
</x-admin-layouts>