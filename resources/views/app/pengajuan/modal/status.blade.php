<div class="modal fade" id="modal_status" tabindex="-1" aria-labelledby="modal-status-terima" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Pengajuan Diterima</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="form_status">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="fv-row">
                        <label class="required fw-bold fs-6 mb-1">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control form-control-solid mb-lg-0"
                            cols="30" rows="5" placeholder="Berikan keterangan untuk pelapor" required></textarea>
                        <small id="error_text" class="form-text text-danger nama_error"></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn" id="btn_submit">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
