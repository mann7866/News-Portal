<div class="modal fade" id="delete-{{ $employeeJob->id }}" tabindex="-1" aria-labelledby="createModal">
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
                <h5 class="modal-title text-center">
                    <form action="{{ route('employeeJob.destroy', $employeeJob->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-success">Iya</button>
                    </form>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Tidak</button>
                </h5>

            </div>


        </div>
    </div>
</div>
