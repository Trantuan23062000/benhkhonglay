<form id="sua" action="{{route('nghenghiep.update',$nghenghiep->MA_NGHE_NGHIEP)}}" method="post">
    @csrf @method('PUT')
    <div class="form-group mb-3">
        <label for="">Mã dân tộc</label>
        <input type="text" value="{{$dantoc->MA_DAN_TOC}}" name="MA_DAN_TOC" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Tên dân tộc</label>
        <input type="text" value="{{$dantoc->TEN_DAN_TOC}}" name="TEN_DAN_TOC" class="form-control">
    </div>

    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
    <button type="submit" class="btn btn-warning update_dantoc">Cập nhật</button>
</form>
