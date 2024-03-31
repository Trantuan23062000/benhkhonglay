<form id="sua" action="{{route('ttyte.update',$ttyte->ID)}}" method="post">
    @csrf @method('PUT')
    <div class="row">
    <div class="form-group col-md-6 ">
        <label for="">Tên sở y tế</label>
        <input type="text" value="{{$ttyte->TEN_TRUNG_TAM_Y_TE}}" id="edit_TEN_SO_Y_TE" name="TEN_TRUNG_TAM_Y_TE" class="TEN_SO_Y_TE form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="">Địa chỉ</label>
        <input type="text" value="{{$ttyte->DIA_CHI}}" id="edit_DIA_CHI" name="DIA_CHI" class="DIA_CHI form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="">SDT</label>
        <input type="text" value="{{$ttyte->SDT}}" id="edit_SDT" name="SDT" class="SDT form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="">Email</label>
        <input type="text" value="{{$ttyte->EMAIL}}" id="edit_EMAIL" name="EMAIL" class="EMAIL form-control">
    </div>
    <div class="col-md-6 mb-4">
        <label for="tieude">Sở y tế<span class="text-danger font-weight-bold">*</span></label>
        <select id="SO_Y_TE_ID" class="form-control custom-select @error('SO_Y_TE_ID') is-invalid @enderror"
            name="SO_Y_TE_ID" required autofocus>
            <option value="">-- Chọn sở y tế --</option>
            @foreach ($soyte as $item)
                <option value="{{ $item->ID }}" {{ $ttyte->SO_Y_TE_ID == $item->ID ? 'selected' : '' }}>
                    {{ $item->TEN_SO_Y_TE }}</option>
            @endforeach
        </select>
    </div>
    </div>

    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
    <button type="submit" class="btn btn-warning update_dantoc">Cập nhật</button>
</form>
