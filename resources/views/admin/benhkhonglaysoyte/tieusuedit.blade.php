<form id="sua" action="{{route('tieusubenhtat.update',$tieusubenhtat->ID)}}" method="post">
    @csrf @method('PUT')
    <div class="row">
        <div class="row mt-3">
            <div class="col-sm-4 mt-3">
                <label for="">Họ tên</label>
                <input type="text" value="{{$tieusubenhtat->HO_TEN}}" name="HO_TEN" class="form-control">
            </div>
            <div class="col-sm-4 mt-3">
                <label for="">Thời gian ghi nhận</label>
                <input type="date" value="{{$tieusubenhtat->THOI_GIAN_GHI_NHAN}}" name="THOI_GIAN_GHI_NHAN" class="form-control">
            </div>
            
            <div class="col-sm-4 mt-3">
                <label for="">Tiền sử bản thân</label>
                <input type="text" value="{{$tieusubenhtat->TIEN_SU_BAN_THAN}}" name="TIEN_SU_BAN_THAN" class="form-control">
            </div>
            <div class="col-sm-4 mt-3">
                <label for="">Năm chuẩn đoán</label>
                <input type="text" value="{{$tieusubenhtat->NAM_CHUAN_DOAN}}" name="NAM_CHUAN_DOAN" class="form-control">
            </div>
            <div class="col-sm-4 mt-3">
                <label for="">Yếu tố nguy cơ</label>
                <input type="text" value="{{$tieusubenhtat->YEU_TO_NGUY_CO}}" name="YEU_TO_NGUY_CO" class="form-control">
            </div>
            <div class="col-sm-4 mt-3">
                <label for="">Năm chuẩn đoán nguy cơ</label>
                <input type="text" value="{{$tieusubenhtat->NAM_CHUAN_DOAN_NGUY_CO}}" name="NAM_CHUAN_DOAN_NGUY_CO" class="form-control">
            </div>
            <div class="col-sm-12 mt-3">
                <label for="">Tiền sử gia đình</label>
                <input type="text" value="{{$tieusubenhtat->TIEU_SU_GIA_DINH}}" name="TIEU_SU_GIA_DINH" class="form-control">
            </div>
        </div>
    <div class="mt-3">
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Thoát</button>
            <button type="submit" class="btn btn-warning">Cập nhật</button>
        </div>
    </div>
</form>

