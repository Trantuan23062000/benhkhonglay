<form id="sua" action="{{route('thongtinbenhan.update',$thongtinbenhan->MA_BENH_AN)}}" method="post">
    @csrf @method('PUT')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Thông tin chung:</th>
            </tr>
        </thead>
    </table>
    <div class="row mt-3">
        <div class="col-sm-4">
            <label for="">Mã bệnh án</label>
            <input type="text" value="{{$thongtinbenhan->MA_BENH_AN}}" name="MA_BENH_AN" class="form-control">
        </div>
        <div class="col-sm-4">
            <label for="">Chọn bệnh nhân khám bệnh</label>
            <select class="form-control custom-select" name="DOI_TUONG_MAC_BENH_ID" autofocus>
                <option>Chọn tên bệnh nhân</option>
                @foreach ($doituongmacbenh as $item)
                <option value="{{ $item->ID }}"
                    {{ $thongtinbenhan->DOI_TUONG_MAC_BENH_ID == $item->ID ? 'selected' : '' }}>
                    {{ $item->HO_TEN }}</option>
            @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <label for="">Lí do khám</label>
            <select id="" class="form-control custom-select" name="LI_DO_KHAM" autofocus>
                @if ($thongtinbenhan->LI_DO_KHAM = 0)
                    <option selected value="0">Đến hẹn</option>
                    <option value="1">Lí do khác</option>
                @elseif ($thongtinbenhan->LI_DO_KHAM = 1)
                    <option value="0">Đến hẹn</option>
                    <option selected value="1">Lí do khác</option>
                @endif
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-4">
            <label for="">Ngày tiếp nhận</label>
            <input type="datetime" name="THOI_GIAN_KHAM_BENH" value="{{$thongtinbenhan->THOI_GIAN_KHAM_BENH}}" class="form-control">
        </div>
        <div class="col-sm-4">
            <label for="">Ngày kết thúc khám</label>
            <input type="date" name="NGAY_KET_THUC_KHAM" value="{{$thongtinbenhan->NGAY_KET_THUC_KHAM}}" class="form-control">
        </div>
        <div class="col-sm-4">
            <label for="">Quá trình bệnh lí</label>
            <input type="text" name="QUA_TRINH_BENH_LY" value="{{$thongtinbenhan->QUA_TRINH_BENH_LY}}" class="form-control">
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tình trạng sức khỏe:</th>
            </tr>
        </thead>
    </table>
    <div class="row">
        <div class="col-sm-6">
            <label for="">Chuẩn đoán khám bệnh</label>
            <input type="text" name="CHUAN_DOAN_KHAM_BENH" value="{{$thongtinbenhan->CHUAN_DOAN_KHAM_BENH}}" class="form-control">
        </div>
        <div class="col-sm-6">
            <label for="">Triệu chứng</label>
            <input type="text" name="TRIEU_CHUNG" value="{{$thongtinbenhan->TRIEU_CHUNG}}" class="form-control">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-3">
            <label for="">Chiều cao</label>
            <input type="text" name="CHIEU_CAO" value="{{$thongtinbenhan->CHIEU_CAO}}" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Huyết áp cao</label>
            <input type="text" name="HUYET_AP_CAO" value="{{$thongtinbenhan->CHIEU_CAO}}" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Huyết áp thấp</label>
            <input type="text" name="HUYET_AP_THAP" value="{{$thongtinbenhan->HUYET_AP_THAP}}" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Cân nặng</label>
            <input type="text" name="CAN_NANG" value="{{$thongtinbenhan->CAN_NANG}}" class="form-control">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <label for="">Mạch</label>
            <input type="text" name="MACH" value="{{$thongtinbenhan->MACH}}"  class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">BMI</label>
            <input type="text" name="BMI" value="{{$thongtinbenhan->BMI}}" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Nhiệt độ</label>
            <input type="text" name="NHIET_DO" value="{{$thongtinbenhan->NHIET_DO}}" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Nhịp thuở</label>
            <input type="text" name="NHIP_THO" value="{{$thongtinbenhan->NHIP_THO}}" class="form-control">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <label for="">Đường máu</label>
            <input type="text" name="DUONG_MAU" value="{{$thongtinbenhan->DUONG_MAU}}" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Vòng eo</label>
            <input type="text" name="VONG_EO" value="{{$thongtinbenhan->VONG_EO}}" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Nồng độ chất béo</label>
            <input type="text" name="NON_DO_CHAT_BEO" value="{{$thongtinbenhan->NON_DO_CHAT_BEO}}" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Tiểu sử bệnh tật</label>
            <select id="" class="form-control custom-select" name="TIEN_SU_BAN_THAN_ID" autofocus>
                <option value="">Chọn tên bệnh nhân</option>
                @foreach ($tiensubenhan as $item)
                <option value="{{ $item->ID }}"
                    {{ $thongtinbenhan->TIEU_SU_BAN_THAN_ID == $item->ID ? 'selected' : '' }}>
                    {{ $item->HO_TEN }}</option>
            @endforeach

            </select>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tổng kết bệnh án:</th>
            </tr>
        </thead>
    </table>
    <div class="row mt-3">
        <div class="col-sm-4">
            <label for="">Hướng giải quyết</label>
            <input type="text" name="HUONG_GIAI_QUYET"  value="{{$thongtinbenhan->HUONG_GIAI_QUYET}}" class="form-control">
        </div>
        <div class="col-sm-4">
            <label for="">Chọn bệnh nhân xét nghiệm</label>
            <select id="" class="form-control custom-select" name="MA_PHIEU_CLS" autofocus>
                <option value="">Tên bệnh nhân</option>
                @foreach ($canlamsang as $item)
                <option value="{{ $item->MA_PHIEU_CLS }}"
                    {{ $thongtinbenhan->MA_PHIEU_CLS == $item->MA_PHIEU_CLS ? 'selected' : '' }}>
                    {{ $item->HO_TEN }}</option>
            @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <label for="">Chọn bệnh nhân lập thuốc</label>
            <select id="" class="form-control custom-select" name="MA_TOA_THUOC" autofocus>
                <option value="">Chọn</option>
                @foreach ($donthuoc as $item)
                <option value="{{ $item->MA_TOA_THUOC }}"
                    {{ $thongtinbenhan->MA_TOA_THUOC == $item->MA_TOA_THUOC ? 'selected' : '' }}>
                    {{ $item->HO_TEN }}</option>
            @endforeach
            </select>
        </div>
        <div class="row mt-3">
            <div class="col-sm-6">
                <label for="">Ngày bắt đầu điều trị</label>
                <input type="date" name="NGAY_BAT_DAU_DEU_TRI" value="{{$thongtinbenhan->NGAY_BAT_DAU_DEU_TRI}}" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="">Ngày kết thúc điều trị</label>
                <input type="date" name="NGAY_KET_THUC_DEU_TRI" value="{{$thongtinbenhan->NGAY_KET_THUC_DEU_TRI}}" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-6">
                <label for="">Lí do đều trị</label>
                <input type="text" name="LI_DO_DEU_TRI" value="{{$thongtinbenhan->LI_DO_DEU_TRI}}" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="">Lí do kết thúc đều trị</label>
                <input type="text" name="LI_DO_KET_THUC_DEU_TRI" value="{{$thongtinbenhan->LI_DO_KET_THUC_DEU_TRI}}" class="form-control">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-4">
                <label for="">Chuẩn đoán kết thúc đều trị</label>
                <input type="text" name="CHUAN_DOAN_KET_THUC_DEU_TRI" value="{{$thongtinbenhan->CHUAN_DOAN_KET_THUC_DEU_TRI}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="">Kết quả đều trị</label>
                <input type="text" name="KET_QUA_DEU_TRI" value="{{$thongtinbenhan->KET_QUA_DEU_TRI}}"  class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="">Tình trạng ra viện</label>
                <input type="text" name="TINH_TRANG_RA_VIEN" value="{{$thongtinbenhan->TINH_TRANG_RA_VIEN}}" class="form-control">
            </div>
        </div>
    <div class="mt-3">
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Thoát</button>
            <button type="submit" class="btn btn-warning">Cập nhật</button>
        </div>
    </div>
</form>
