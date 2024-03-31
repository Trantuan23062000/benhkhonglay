<form id="sua" action="{{route('doituongmacbenh.update',$doituongmacbenh->ID)}}" method="post">
    @csrf @method('PUT')
    <div class="row">
    <div class="form-group col-sm-4">
        <label for="">Mã định danh</label>
        <input type="text" value="{{$doituongmacbenh->MA_DINH_DANH_V20}}" name="MA_DINH_DANH_V20" class="form-control">
    </div>
    <div class="form-group col-sm-4">
        <label for="">Họ tên</label>
        <input type="text" value="{{$doituongmacbenh->HO_TEN}}" name="HO_TEN" class="form-control">
    </div>
    <div class="form-group col-sm-4">
        <label for="">Số CMND</label>
        <input type="text" value="{{$doituongmacbenh->SO_CMND}}" name="SO_CMND" class="form-control">
    </div>
    <div class="form-group col-sm-4">
        <label for="">Số điện thoại</label>
        <input type="text" value="{{$doituongmacbenh->SO_DIEN_THOAI}}" name="SO_DIEN_THOAI" class="form-control">
    </div>
    <div class="form-group col-sm-4">
        <label for="">Ngày sinh</label>
        <div>
            <input type="date" value="{{$doituongmacbenh->NGAY_SINH}}" required class="form-control" name="NGAY_SINH">
        </div>
    </div>
    <div class="form-group col-sm-4">
        <label for="tieude">Đối tượng<span class="text-danger font-weight-bold"></span></label>
        <select id="MA_DOI_TUONG" class="form-control"
            name="MA_DOI_TUONG" required autofocus>
            <option value="">-- Chọn đối tượng --</option>
            @foreach ($doituong as $item)
                <option value="{{ $item->MA_DOI_TUONG }}" {{ $doituongmacbenh->MA_DOI_TUONG == $item->MA_DOI_TUONG ? 'selected' : '' }}>
                    {{ $item->TEN_DOI_TUONG }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-4">
        <label for="gioitinh">Giới tính <span class="text-danger font-weight-bold"></span></label>
        <select class="custom-select form-control "
            name="GIOI_TINH">
            <option value="">-- Chọn --</option>
            @if ($doituongmacbenh->GIOI_TINH=1)
            <option selected value="1">Nam</option>
            <option value="2" >Nữ</option>
            <option value="3" >Cả hai</option>
            @elseif ($doituongmacbenh->GIOI_TINH=2)
            <option value="1">Nữ</option>
            <option selected value="2" >Nữ</option>
            <option value="3" >Cả hai</option>
            @elseif ($doituongmacbenh->GIOI_TINH=3)
            <option value="1">Nữ</option>
            <option value="2" >Nữ</option>
            <option selected value="3" >Cả hai</option>
            @endif
           
        </select>
    </div>
    <div class="form-group col-sm-4">
        <label for="tieude">Nghề nghiệp<span class="text-danger font-weight-bold"></span></label>
        <select id="MA_NGHE_NGHIEP_ID" class="form-control"
            name="MA_NGHE_NGHIEP_ID" required autofocus>
            <option value="">-- Chọn nghề nghiệp --</option>
            @foreach ($nghenghiep as $item)
                <option value="{{ $item->MA_NGHE_NGHIEP }}" {{ $doituongmacbenh->MA_NGHE_NGHIEP_ID == $item->MA_NGHE_NGHIEP ? 'selected' : '' }}>
                    {{ $item->TEN_NGHE_NGHIEP }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-4">
        <label for="tieude">Dân tộc<span class="text-danger font-weight-bold"></span></label>
        <select id="MA_DAN_TOC" class="form-control"
            name="MA_DAN_TOC" required autofocus>
            <option value="">-- Chọn dân tộc --</option>
            @foreach ($dantoc as $item)
                <option value="{{ $item->MA_DAN_TOC }}" {{ $doituongmacbenh->MA_DAN_TOC == $item->MA_DAN_TOC ? 'selected' : '' }}>
                    {{ $item->TEN_DAN_TOC }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-3">
        <label for="tieude">Tĩnh hộ khẩu<span class="text-danger font-weight-bold"></span></label>
        <select id="tinhnt" class="form-control"
            name="MA_TINH_HO_KHAU" required autofocus>
            <option value="">-- Chọn tĩnh hộ khẩu --</option>
            @foreach ($tinh as $item)
                <option value="{{ $item->MA_TINH }}" {{ $doituongmacbenh->MA_TINH_HO_KHAU == $item->MA_TINH ? 'selected' : '' }}>
                    {{ $item->TEN_TINH }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-3">
        <label for="tieude">Huyện hộ khẩu<span class="text-danger font-weight-bold"></span></label>
        <select id="huyennt" class="form-control"
            name="MA_HUYEN_HO_KHAU" required autofocus>
            <option value="">-- Chọn huyện hộ khẩu --</option>
            @foreach ($huyen as $item)
                <option value="{{ $item->MA_HUYEN }}" {{ $doituongmacbenh->MA_HUYEN == $item->MA_HUYEN_HO_KHAU ? 'selected' : '' }}>
                    {{ $item->TEN_HUYEN }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-3">
        <label for="tieude">Xã hộ khẩu<span class="text-danger font-weight-bold"></span></label>
        <select id="xant" class="form-control"
            name="MA_XA_HO_KHAU" required autofocus>
            <option value="">-- Chọn xã hộ khẩu --</option>
            @foreach ($xa as $item)
                <option value="{{ $item->MA_XA }}" {{ $doituongmacbenh->MA_XA == $item->MA_XA_HO_KHAU ? 'selected' : '' }}>
                    {{ $item->TEN_XA }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-3">
        <label for="">Địa chỉ hộ khẩu</label>
        <div>
            <input type="text" value="{{$doituongmacbenh->HO_KHAU_DIA_CHI}}" required class="form-control" name="HO_KHAU_DIA_CHI">
        </div>
    </div>
    <div class="form-group col-sm-3">
        <label for="tieude">Tĩnh tạm trú<span class="text-danger font-weight-bold"></span></label>
        <select id="tinhtt" class="form-control"
            name="MA_TINH_TAM_TRU" required autofocus>
            <option value="">-- Chọn tĩnh tạm trú --</option>
            @foreach ($tinh as $item)
                <option value="{{ $item->MA_TINH }}" {{ $doituongmacbenh->MA_TINH == $item->MA_TINH_TAM_TRU ? 'selected' : '' }}>
                    {{ $item->TEN_TINH }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-3">
        <label for="tieude">Huyện tạm trú<span class="text-danger font-weight-bold"></span></label>
        <select id="huyentt" class="form-control"
            name="MA_HUYEN_TAM_TRU" required autofocus>
            <option value="">-- Chọn tĩnh tạm trú --</option>
            @foreach ($huyen1 as $item)
                <option value="{{ $item->MA_HUYEN }}" {{ $doituongmacbenh->MA_HUYEN == $item->MA_HUYEN_TAM_TRU ? 'selected' : '' }}>
                    {{ $item->TEN_HUYEN }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-3">
        <label for="tieude">Xã tạm trú<span class="text-danger font-weight-bold"></span></label>
        <select id="xatt" class="form-control"
            name="MA_XA_TAM_TRU" required autofocus>
            <option value="">-- Chọn xã tạm trú --</option>
            @foreach ($xa1 as $item)
                <option value="{{ $item->MA_XA }}" {{ $doituongmacbenh->MA_XA == $item->MA_XA_TAM_TRU ? 'selected' : '' }}>
                    {{ $item->TEN_XA }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-3 mb-4">
        <label for="">Tạm trú địa chỉ</label>
        <div>
            <input type="text" value="{{$doituongmacbenh->TAM_TRU_DIA_CHI}}" required class="form-control" name="TAM_TRU_DIA_CHI">
        </div>
    </div>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
    <button type="submit" class="btn btn-warning update_dantoc">Cập nhật</button>
</form>

