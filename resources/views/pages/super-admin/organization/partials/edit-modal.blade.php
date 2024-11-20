<div class="modal fade" id="edit-modal-{{ $organization->id }}" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="editModal">
                    Edit Organisasi
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('organization.update', $organization->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- The rest of your form -->
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="image" class="control-label fw-semibold">Foto Organisasi</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" placeholder="masukkan Nama Organisasi..." name="image"
                            id="image" />
                        @if ($organization->image && file_exists(storage_path('app/public/' . $organization->image)))
                            <div class="mt-3">
                                <img src="{{ asset('storage/' . $organization->image) }}" alt="{{ $organization->name }}" 
                                     class="rounded" style="width: 100px; height: 100px; object-fit: cover;">
                                <p class="mt-2">Foto yang saat ini digunakan</p>
                            </div>
                        @else
                            <div class="mt-3">
                                <img src="{{ asset('default-image.png') }}" alt="Default Image" 
                                     class="rounded" style="width: 100px; height: 100px; object-fit: cover;">
                                <p class="mt-2">Foto default</p>
                            </div>
                        @endif
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="control-label fw-semibold">Nama Organisasi</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" value="{{ old('name', $organization->name) }}" />
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="control-label fw-semibold">Deskripsi</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                            id="description" value="{{ old('description', $organization->description) }}" />
                        @error('description')
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
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
