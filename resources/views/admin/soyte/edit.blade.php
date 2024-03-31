<form id="sua" action="{{route('soyte.update',$soyte->ID)}}" method="post">
    @csrf @method('PUT')
    <div class="form-group mb-3">
        <label for="">Tên sở y tế</label>
        <input type="text" value="{{$soyte->TEN_SO_Y_TE}}" id="edit_TEN_SO_Y_TE" name="TEN_SO_Y_TE" class="TEN_SO_Y_TE form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Địa chỉ</label>
        <input type="text" value="{{$soyte->DIA_CHI}}" id="edit_DIA_CHI" name="DIA_CHI" class="DIA_CHI form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">SDT</label>
        <input type="text" value="{{$soyte->SDT}}" id="edit_SDT" name="SDT" class="SDT form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Email</label>
        <input type="text" value="{{$soyte->EMAIL}}" id="edit_EMAIL" name="EMAIL" class="EMAIL form-control">
    </div>

    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
    <button type="submit" class="btn btn-warning update_dantoc">Cập nhật</button>
</form>
