<form id="sua" action="{{route('bacsi.update',$bacsi->MABS)}}" method="post">
    @csrf @method('PUT')
    <div class="form-group mb-3">
        <label for="">Mã bác sĩ</label>
        <input type="text" value="{{$bacsi->MABS}}" name="MABS" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Tên bác sĩ</label>
        <input type="text" value="{{$bacsi->TEN_BS}}" name="TEN_BS" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Chức danh</label>
        <input type="text" value="{{$bacsi->CHUC_DANH}}" name="CHUC_DANH" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Tên khoa</label>
        <input type="text" value="{{$bacsi->TEN_KHOA}}" name="TEN_KHOA" class="form-control">
    </div>

    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
    <button type="submit" class="btn btn-warning update_dantoc">Cập nhật</button>
</form>