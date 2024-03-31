<form id="sua" action="" method="post">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-sm-3">
            <label for="inputText" class="">Mã phiếu cận lâm sàng</label>
            <div>
                <input type="text" required class="form-control" name="MA_PHIEU_CLS">
            </div>
        </div>
        <div class="col-sm-3">
            <label for="inputText" class="">Ngày chỉ định</label>
            <div>
                <input type="text" required class="form-control" name="NGAY_CHI_DINH">
            </div>
        </div>
        <div class="col-sm-3">
            <label for="inputText" class="">Ngày chỉ định</label>
            <div>
                <input type="text" required class="form-control" name="NGAY_CHI_DINH">
            </div>
        </div>
    </div>
    <div class="mt-3">
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
            <button type="submit" class="btn btn-warning update_dantoc">Cập nhật</button>
        </div>
    </div>

</form>

