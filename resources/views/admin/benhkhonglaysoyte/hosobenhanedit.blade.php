<form id="sua" action="{{ route('doituongmacbenh.update', $doituongmacbenh->ID) }}" method="post">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-sm-4 mt-4">
            <label for="">Mã định danh</label>
            <input type="text" value="{{ $doituongmacbenh->MA_DINH_DANH_V20 }}" name="MA_DINH_DANH_V20"
                class="form-control">
        </div>
        <div class="col-sm-4 mt-4">
            <label for="">Mã hồ sơ</label>
            <input type="text" value="{{ $doituongmacbenh->MA_HO_SO }}" name="MA_HO_SO" class="form-control">
        </div>
        <div class="col-sm-4 mt-4">
            <label for="label">Mã đối tượng <span class="text-danger font-weight-bold"></span></label>
            <select class="custom-select form-control " name="MA_DOI_TUONG">
                <option value="">-- Chọn --</option>
                @if ($doituongmacbenh->MA_DOI_TUONG = 1)
                    <option selected value="1">Có BHYT</option>
                    <option value="2">Không BHYT</option>
                    <option value="3">Trường hợp khác</option>
                @elseif ($doituongmacbenh->MA_DOI_TUONG = 2)
                    <option selected value="2">không BHYT</option>
                    <option value="1">Có BHYT</option>
                    <option value="3">Trường hợp khác</option>
                @elseif ($doituongmacbenh->MA_DOI_TUONG = 3)
                    <option selected value="3">Trường hợp khác</option>
                    <option value="1">Có BHYT</option>
                    <option value="2">Không BHYT</option>
                @endif

            </select>
        </div>
        <div class="col-sm-4 mt-4">
            <label for="">Số BHYT</label>
            <input type="text" value="{{ $doituongmacbenh->SO_BHYT }}" name="SO_BHYT" class="form-control">
        </div>
        <div class="col-sm-4 mt-4">
            <label for="">HSD BHYT</label>
            <input type="date" value="{{ $doituongmacbenh->HSD_BHYT }}" name="HSD_BHYT" class="form-control">
        </div>

        <div class="col-sm-4 mt-4">
            <label for="">Họ tên</label>
            <input type="text" value="{{ $doituongmacbenh->HO_TEN }}" name="HO_TEN" class="form-control">
        </div>
        <div class="col-sm-4 mt-4">
            <label for="gioitinh">Giới tính <span class="text-danger font-weight-bold"></span></label>
            <select class="custom-select form-control " name="GIOI_TINH">
                <option value="">-- Chọn --</option>
                @if ($doituongmacbenh->GIOI_TINH = 1)
                    <option selected value="1">Nam</option>
                    <option value="2">Nữ</option>
                    <option value="3">Cả hai</option>
                @elseif ($doituongmacbenh->GIOI_TINH = 2)
                    <option value="1">Nữ</option>
                    <option selected value="2">Nữ</option>
                    <option value="3">Cả hai</option>
                @elseif ($doituongmacbenh->GIOI_TINH = 3)
                    <option value="1">Nữ</option>
                    <option value="2">Nữ</option>
                    <option selected value="3">Cả hai</option>
                @endif

            </select>
        </div>
        <div class="col-sm-4 mt-4">
            <label for="">Ngày sinh</label>
            <div>
                <input type="date" value="{{ $doituongmacbenh->NGAY_SINH }}" required class="form-control"
                    name="NGAY_SINH">
            </div>
        </div>
        <div class="col-sm-4 mt-4">
            <label for="">Số điện thoại</label>
            <input type="text" value="{{ $doituongmacbenh->SO_DIEN_THOAI }}" name="SO_DIEN_THOAI"
                class="form-control">
        </div>
        <div class="col-sm-3 mt-4">
            <label for="tieude">Dân tộc<span class="text-danger font-weight-bold"></span></label>
            <select id="MA_DAN_TOC" class="form-control" name="MA_DAN_TOC" required autofocus>
                <option value="">-- Chọn dân tộc --</option>
                @foreach ($dantoc as $item)
                    <option value="{{ $item->MA_DAN_TOC }}"
                        {{ $doituongmacbenh->MA_DAN_TOC == $item->MA_DAN_TOC ? 'selected' : '' }}>
                        {{ $item->TEN_DAN_TOC }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3 mt-4">
            <label for="">Số CMND</label>
            <input type="text" value="{{ $doituongmacbenh->SO_CMND }}" name="SO_CMND" class="form-control">
        </div>




        <div class="col-sm-3 mt-4">
            <label for="tieude">Nghề nghiệp<span class="text-danger font-weight-bold"></span></label>
            <select id="MA_NGHE_NGHIEP_ID" class="form-control" name="MA_NGHE_NGHIEP_ID" required autofocus>
                <option value="">-- Chọn nghề nghiệp --</option>
                @foreach ($nghenghiep as $item)
                    <option value="{{ $item->MA_NGHE_NGHIEP }}"
                        {{ $doituongmacbenh->MA_NGHE_NGHIEP_ID == $item->MA_NGHE_NGHIEP ? 'selected' : '' }}>
                        {{ $item->TEN_NGHE_NGHIEP }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3 mt-4">
            <label for="">Nơi làm việc</label>
            <input type="text" value="{{ $doituongmacbenh->NOI_LAM_VIEC }}" name="NOI_LAM_VIEC"
                class="form-control">
        </div>

        <div class="col-sm-3 mt-4">
            <label for="tieude">Tĩnh hộ khẩu<span class="text-danger font-weight-bold"></span></label>
            <select id="tinhnt" class="form-control" name="MA_TINH_HO_KHAU" required autofocus>
                <option value="">-- Chọn tĩnh hộ khẩu --</option>
                @foreach ($tinh as $item)
                    <option value="{{ $item->MA_TINH }}"
                        {{ $doituongmacbenh->MA_TINH_HO_KHAU == $item->MA_TINH ? 'selected' : '' }}>
                        {{ $item->TEN_TINH }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3 mt-4">
            <label for="tieude">Huyện hộ khẩu<span class="text-danger font-weight-bold"></span></label>
            <select id="huyennt" class="form-control" name="MA_HUYEN_HO_KHAU" required autofocus>
                <option value="">-- Chọn huyện hộ khẩu --</option>
                @foreach ($huyen as $item)
                    <option value="{{ $item->MA_HUYEN }}"
                        {{ $doituongmacbenh->MA_HUYEN == $item->MA_HUYEN_HO_KHAU ? 'selected' : '' }}>
                        {{ $item->TEN_HUYEN }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3 mt-4">
            <label for="tieude">Xã hộ khẩu<span class="text-danger font-weight-bold"></span></label>
            <select id="xant" class="form-control" name="MA_XA_HO_KHAU" required autofocus>
                <option value="">-- Chọn xã hộ khẩu --</option>
                @foreach ($xa as $item)
                    <option value="{{ $item->MA_XA }}"
                        {{ $doituongmacbenh->MA_XA == $item->MA_XA_HO_KHAU ? 'selected' : '' }}>
                        {{ $item->TEN_XA }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3 mt-4">
            <label for="">Địa chỉ hộ khẩu</label>
            <div>
                <input type="text" value="{{ $doituongmacbenh->HO_KHAU_DIA_CHI }}" required class="form-control"
                    name="HO_KHAU_DIA_CHI">
            </div>
        </div>
        <div class="col-sm-3 mt-4">
            <label for="tieude">Tĩnh tạm trú<span class="text-danger font-weight-bold"></span></label>
            <select id="tinhtt" class="form-control" name="MA_TINH_TAM_TRU" required autofocus>
                <option value="">-- Chọn tĩnh tạm trú --</option>
                @foreach ($tinh as $item)
                    <option value="{{ $item->MA_TINH }}"
                        {{ $doituongmacbenh->MA_TINH == $item->MA_TINH_TAM_TRU ? 'selected' : '' }}>
                        {{ $item->TEN_TINH }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3 mt-4">
            <label for="tieude">Huyện tạm trú<span class="text-danger font-weight-bold"></span></label>
            <select id="huyentt" class="form-control" name="MA_HUYEN_TAM_TRU" required autofocus>
                <option value="">-- Chọn tĩnh tạm trú --</option>
                @foreach ($huyen1 as $item)
                    <option value="{{ $item->MA_HUYEN }}"
                        {{ $doituongmacbenh->MA_HUYEN == $item->MA_HUYEN_TAM_TRU ? 'selected' : '' }}>
                        {{ $item->TEN_HUYEN }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3 mt-4">
            <label for="tieude">Xã tạm trú<span class="text-danger font-weight-bold"></span></label>
            <select id="xatt" class="form-control" name="MA_XA_TAM_TRU" required autofocus>
                <option value="">-- Chọn xã tạm trú --</option>
                @foreach ($xa1 as $item)
                    <option value="{{ $item->MA_XA }}"
                        {{ $doituongmacbenh->MA_XA == $item->MA_XA_TAM_TRU ? 'selected' : '' }}>
                        {{ $item->TEN_XA }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3 mt-4">
            <label for="">Tạm trú địa chỉ</label>
            <div>
                <input type="text" value="{{ $doituongmacbenh->TAM_TRU_DIA_CHI }}" required class="form-control"
                    name="TAM_TRU_DIA_CHI">
            </div>
        </div>
        <div class="col-sm-4 mt-4">
            <label for="">Tên người thân</label>
            <div>
                <input type="text" value="{{ $doituongmacbenh->HO_TEN_NGUOI_THAN }}" required class="form-control"
                    name="HO_TEN_NGUOI_THAN">
            </div>
        </div>
        <div class="col-sm-4 mt-4">
            <label for="">Ngày sinh người thân</label>
            <div>
                <input type="date" value="{{ $doituongmacbenh->NGAY_SINH_NGUOI_THAN }}" required
                    class="form-control" name="NGAY_SINH_NGUOI_THAN">
            </div>
        </div>
        <div class="col-sm-4 mt-4">
            <label for="">Địa chỉ người thân</label>
            <div>
                <input type="text" value="{{ $doituongmacbenh->DIA_CHI }}" required class="form-control"
                    name="DIA_CHI">
            </div>
        </div>
        <div class="col-sm-4 mt-4">
            <label for="">SDT người thân</label>
            <div>
                <input type="text" value="{{ $doituongmacbenh->SDT_NGUOI_THAN }}" required class="form-control"
                    name="SDT_NGUOI_THAN">
            </div>
        </div>
        <div class="col-sm-3 mt-4">
            <label for="tieude">Nghề nghiệp người thân<span class="text-danger font-weight-bold"></span></label>
            <select id="NGHE_NGHIEP_NGUOI_THAN" class="form-control" name="NGHE_NGHIEP_NGUOI_THAN" required autofocus>
                <option value="">-- Chọn nghề nghiệp --</option>
                @foreach ($nghenghiep as $item)
                    <option value="{{ $item->MA_NGHE_NGHIEP }}"
                        {{ $doituongmacbenh->NGHE_NGHIEP_NGUOI_THAN == $item->MA_NGHE_NGHIEP ? 'selected' : '' }}>
                        {{ $item->TEN_NGHE_NGHIEP }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-4 mt-4">
            <label for="">Nơi làm việc NT</label>
            <div>
                <input type="text" value="{{ $doituongmacbenh->NOI_LAM_VIEC_NT }}" required class="form-control"
                    name="NOI_LAM_VIEC_NT">
            </div>
        </div>
        <div class="col-sm-6 mt-4">
            <label for="">Chuẩn đoán năm</label>
            <div>
                <input type="text" value="{{ $doituongmacbenh->CHUAN_DOAN_NAM }}" required class="form-control"
                    name="CHUAN_DOAN_NAM">
            </div>
        </div>
        <div class="col-sm-6 mt-4">
            <label for="">Chuẩn đoán tại cơ sở</label>
            <div>
                <input type="text" value="{{ $doituongmacbenh->CHUAN_DOAN_TAI_CO_SO }}" required
                    class="form-control" name="CHUAN_DOAN_TAI_CO_SO">
            </div>
        </div>
        <div class="mb-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Bệnh không lây nhiễm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @if (in_array('Benh dai thao duong', json_decode($doituongmacbenh->BENH_KLN_DANG_MAC)))
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" checked type="checkbox" value="Benh dai thao duong"
                                        id="flexCheckDefault" name="BENH_KLN_DANG_MAC[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Bệnh đái tháo đường
                                    </label>
                                </div>
                            </th>
                        @else
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Benh dai thao duong" id="flexCheckDefault"
                                        name="BENH_KLN_DANG_MAC[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Bệnh đái tháo đường
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('Mau nhiem mo', json_decode($doituongmacbenh->BENH_KLN_DANG_MAC)))
                            <th>
                                <div class="form-check">
                                    <input checked class="form-check-input" type="checkbox" value="Mau nhiem mo"
                                        id="flexCheckDefault" name="BENH_KLN_DANG_MAC[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Máu nhiễm mỡ
                                    </label>
                                </div>
                            </th>
                        @else
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Mau nhiem mo" id="flexCheckDefault"
                                        name="BENH_KLN_DANG_MAC[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Máu nhiễm mỡ
                                    </label>
                                </div>
                            </th>
                        @endif


                        @if (in_array('Tieu duong', json_decode($doituongmacbenh->BENH_KLN_DANG_MAC)))
                            <th>
                                <div class="form-check">
                                    <input checked class="form-check-input" type="checkbox" value="Tieu duong"
                                        id="flexCheckDefault" name="BENH_KLN_DANG_MAC[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Tiểu đường
                                    </label>
                                </div>
                            </th>
                        @else
                            <th>
                                <div class="form-check">
                                    <input checked class="form-check-input" type="checkbox" value="Tieu duong"
                                        id="flexCheckDefault" name="BENH_KLN_DANG_MAC[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Tiểu đường
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('Hen phe quan', json_decode($doituongmacbenh->BENH_KLN_DANG_MAC)))
                        <th>
                            <div class="form-check">
                                <input checked class="form-check-input" type="checkbox" value="Hen phe quan"
                                    id="flexCheckDefault" name="BENH_KLN_DANG_MAC[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Hen phế quản
                                </label>
                            </div>
                        </th>
                    @else
                        <th>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Hen phe quan"
                                    id="flexCheckDefault" name="BENH_KLN_DANG_MAC[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Hen phế quản
                                </label>
                            </div>
                        </th>
                    @endif             
                    </tr>
                </tbody>
            </table>
            <div class="mb-3">
                <label for="tieude" class="form-label">
                    <h4>Bệnh khác nếu có:</h4>
                </label>
                <input name="BENH_KHAC" value="{{$doituongmacbenh->BENH_KHAC}}" type="text" class="form-control"
                    aria-describedby="chitiet">
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Thoát</button>
            <button type="submit" class="btn btn-warning">Cập nhật</button>
        </div>
    </div>
</form>
