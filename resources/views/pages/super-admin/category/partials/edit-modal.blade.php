<div class="modal fade" id="edit-modal-{{ $category->id }}" tabindex="-1" aria-labelledby="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="createModal">
                    Tambah Kategori
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="control-label fw-semibold">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" value="{{ $category->name }}" required/>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger text-danger" data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button type="submit" class="btn btn-warning">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="modal fade" id="delete-{{ $category->id }}" tabindex="-1" aria-labelledby="createModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">

            </div>
            <div class="modal-body justify-content-center align-items-center">
                <h4 class="modal-title d-flex justify-content-center" id="createModal">
                    Apakah Anda Yakin?
                </h4>
                <h5 class="modal-title text-center">
                    Anda tidak dapat mengembalikan ini!!
                </h5>
                <h5 class="modal-title mt-2 text-center">
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-success">Iya</button>
                    </form>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                        aria-label="Close">Tidak</button>
                </h5>

            </div>


        </div>
    </div>
</div>
