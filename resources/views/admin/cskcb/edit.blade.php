<form id="sua" action="{{route('cskcb.update',$cskcb->MCSKCB)}}" method="post">
    @csrf @method('PUT')
    <div class="row">
    <div class="form-group mb-3 col-sm-3">
        <label for="">Mã cơ sở khám chữa bệnh</label>
        <input type="text" value="{{$cskcb->MCSKCB}}"  name="MCSKCB" class="form-control">
    </div>
    <div class="form-group mb-3 col-sm-3">
        <label for="">Cơ sở khám chữa bệnh</label>
        <input type="text" value="{{$cskcb->TEN_CSKCB}}" name="TEN_CSKCB" class="form-control">
    </div>
    <div class="form-group mb-3 col-sm-3">
        <label for="">Địa chỉ</label>
        <input type="text" value="{{$cskcb->DIACHI}}"  name="DIACHI" class="form-control">
    </div>
    <div class="form-group mb-3 col-sm-3">
        <label for="">SDT</label>
        <input type="text" value="{{$cskcb->SDT}}"  name="SDT" class="form-control">
    </div>
    <div class="form-group mb-3 col-sm-4">
        <label for="">Email</label>
        <input type="text" value="{{$cskcb->EMAIL}}"  name="EMAIL" class="form-control">
    </div>
    <div class="form-group mb-3 col-sm-4">
        <label for="">Tên đăng nhập</label>
        <input type="text" value="{{$cskcb->TEN_DANG_NHAP}}"  name="TEN_DANG_NHAP" class="form-control">
    </div>
    <div class="form-group mb-3 col-sm-4">
        <label for="">Password</label>
        <input type="password" value="{{$cskcb->password}}"  name="PASSWORD" class=" form-control">
    </div>
    <div class="mb-3 col-sm-4">
        <label for="tieude">Sở y tế<span class="text-danger font-weight-bold">*</span></label>
        <select id="soyte_id" class="form-control custom-select @error('soyte_id') is-invalid @enderror"
            name="soyte_id" required autofocus>
            <option value="">-- Chọn sở y tế --</option>
            @foreach ($soyte as $item)
                <option value="{{ $item->ID }}" {{ $cskcb->soyte_id == $item->ID ? 'selected' : '' }}>
                    {{ $item->TEN_SO_Y_TE }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 col-sm-4">
        <label for="tieude">Trung tâm y tế<span class="text-danger font-weight-bold">*</span></label>
        <select id="ttyte_id" class="form-control custom-select @error('ttyte_id') is-invalid @enderror"
            name="ttyte_id" required autofocus>
            <option value="">-- Chọn trung tâm y tế --</option>
            @foreach ($ttyte as $item)
                <option value="{{ $item->ID }}" {{ $cskcb->ttyte_id == $item->ID ? 'selected' : '' }}>
                    {{ $item->TEN_TRUNG_TAM_Y_TE }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 col-sm-4">
        <label for="tieude">Trạm y tế<span class="text-danger font-weight-bold">*</span></label>
        <select id="tramyte_id" class="form-control custom-select @error('tramyte_id') is-invalid @enderror"
            name="tramyte_id" required autofocus>
            <option value="">-- Chọn sở y tế --</option>
            @foreach ($tramyte as $item)
                <option value="{{ $item->ID }}" {{ $cskcb->tramyte_id == $item->ID ? 'selected' : '' }}>
                    {{ $item->TEN_TRAM_Y_TE }}</option>
            @endforeach
        </select>
    </div>
   
    </div>

    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
    <button type="submit" class="btn btn-warning update_dantoc">Cập nhật</button>
</form>
