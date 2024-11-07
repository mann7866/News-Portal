<div class="modal fade" id="create-modal" tabindex="-1" aria-labelledby="createModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="createModal">
                    Tambah Kategori
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('employeeJob.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="jobs" class="control-label fw-semibold">Nama</label>
                        <input type="text" class="form-control @error('jobs') is-invalid @enderror" name="jobs"
                            id="jobs" />
                        @error('jobs')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="employment_status" class="control-label fw-semibold">Nama</label>
                        <input type="text" class="form-control @error('employment_status') is-invalid @enderror"
                            name="employment_status" id="employment_status" />
                        @error('employment_status')
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
