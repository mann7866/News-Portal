<div class="modal fade" id="edit-modal-{{ $subject->id }}" tabindex="-1" aria-labelledby="createModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="createModal">
                    Tambah Kategori
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('subject.update',$subject->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- This will simulate a PUT request -->

                <!-- The rest of your form -->
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="subject" class="control-label fw-semibold">Pekerjaan</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"
                            id="subject" value="$subject->subject" />
                        @error('subject')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label fw-bold h5">Deskripsi Mapel <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" class="summernote form-control @error('description') is-invalid @enderror"
                            placeholder="Tulis deskripsi Mapel...">
                            {{ old('description') }}
                        </textarea>
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
