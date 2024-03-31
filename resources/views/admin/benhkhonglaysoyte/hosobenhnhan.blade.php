<form id="view" action="" method="post">
    <table class="table">
        <tbody>
          <tr>
            <td>Mã định danh: MDD00{{$doituongmacbenh->MA_DINH_DANH_V20}}</td>
            <td>Mã hồ sơ:MHS00{{$doituongmacbenh->MA_HO_SO}}</td>
            <td>Họ và tên:{{$doituongmacbenh->HO_TEN}}</td>
            @if ($doituongmacbenh->GIOI_TINH==1)
            <td>Giới tính: Nam</td>
            @elseif ($doituongmacbenh->GIOI_TINH==2)
            <td>Giới tính: nữ</td>
            @endif 
            <td>Ngày sinh:{{$doituongmacbenh->NGAY_SINH}}</td> 
          </tr>
          <tr>
            <td>Số BHYT:{{$doituongmacbenh->SO_BHYT}}</td>
            <td>HSD BHYT:{{$doituongmacbenh->HSD_BHYT}}</td>
            <td>Dân tộc:{{$doituongmacbenh->dantoc->TEN_DAN_TOC}}</td>
            <td>Số CMND:{{$doituongmacbenh->SO_CMND}}</td>
            <td>Số điện thoại:{{$doituongmacbenh->SO_DIEN_THOAI}}</td>
          </tr>
          <tr>
            @if ($doituongmacbenh->MA_DOI_TUONG=1)
            <td>Thuộc đối tượng:Có bảo hiểm y tế</td>
            @else
            <td>Mã đối tượng:Không có bảo hiểm y tế</td>   
            @endif
            <td>Tên cơ sở khám chữa bệnh:{{$doituongmacbenh->cskcb->TEN_CSKCB}}</td>
            <td>Nghề nghiệp:{{$doituongmacbenh->nghenghiep->TEN_NGHE_NGHIEP}}</td>
            <td>Nơi làm việc:{{$doituongmacbenh->NOI_LAM_VIEC}}</td>
          </tr>
          <tr>
            <td>Tĩnh hộ khẩu:{{$doituongmacbenh->tinh->TEN_TINH}}</td>
            <td>Huyện hộ khẩu:{{$doituongmacbenh->huyen->TEN_HUYEN}}</td>
            <td>Xã hộ khẩu:{{$doituongmacbenh->xa->TEN_XA}}</td>
            <td>Tạm trú địa chỉ:{{$doituongmacbenh->TAM_TRU_DIA_CHI}}</td>
          </tr>
          <tr>
            <td>Họ tên người thân:{{$doituongmacbenh->HO_TEN_NGUOI_THAN}}</td>
            <td>Ngày sinh người thân:{{$doituongmacbenh->NGAY_SINH_NGUOI_THAN}}</td>
            <td>Địa chỉ người thân:{{$doituongmacbenh->DIA_CHI}}</td>
          </tr>
          <tr>
            <td>SDT người thân:{{$doituongmacbenh->SDT_NGUOI_THAN}}</td>
            <td>Nghề nghiệp người thân:{{$doituongmacbenh->nghenghiep->TEN_NGHE_NGHIEP}}</td>
            <td>Nơi làm việc người thân:{{$doituongmacbenh->NOI_LAM_VIEC_NT}}</td>
          </tr>
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
                    <tr>
                        <td>Bệnh khác nếu có:{{$doituongmacbenh->BENH_KHAC}}</td>
                        <td>Chuẩn đoán năm:{{$doituongmacbenh->CHUAN_DOAN_NAM}}</td>
                        <td>Chuẩn đoán tại cơ sở:{{$doituongmacbenh->CHUAN_DOAN_TAI_CO_SO}}</td>
                    </tr>
                </tbody>
            </table>
        </tbody>
      </table>
</form>
