<form id="themtieusubenhan" action="" method="POST">
    @csrf
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Thông tin chung:</th>
            </tr>
        </thead>
        <tbody>
            <td>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="inputText" class="">Số ngoại trú:</label>
                        <div class="">
                            <input type="number"class="form-control" name="SO_NGOAI_TRU" value="{{$tiensubenhan->SO_NGOAI_TRU}}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="inputText" class="">Số y tế:</label>
                        <div class="">
                            <input type="number" class="form-control" name="MA_YT" value="{{$tiensubenhan->MA_YT}}">
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <label for="inputText" class="">Họ tên:</label>
                        <div class="">
                            <input type="text" class="form-control" name="HO_TEN" value="{{$tiensubenhan->HO_TEN}}">
                        </div>
                    </div>
                </div>
            </td>

        </tbody>
    </table>
    <table class="table">
        <thead>
            <tr>
                <th scope="col-sm-12">Tiền sử bệnh </th>
                <th scope="col-sm-12">Năm chuẩn đoán </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @if (in_array('Tang huyet ap', json_decode($tiensubenhan->TIEN_SU_BAN_THAN)))
                <th>
                    <div class="col-sm-12"></div>
                    <div class="form-check col-sm-6">
                        <input checked class="form-check-input" name="TIEN_SU_BAN_THAN[]" type="checkbox" value="Tang huyet ap"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Tăng huyết áp
                        </label>
                    </div>
                </th>
                @else
                <th>
                    <div class="col-sm-12"></div>
                    <div class="form-check col-sm-6">
                        <input class="form-check-input check-1" name="TIEN_SU_BAN_THAN[]" type="checkbox" value="Tang huyet ap"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Tăng huyết áp
                        </label>
                    </div>
                </th>    
                @endif
                @if (in_array('null', json_decode($tiensubenhan->NAM_CHUAN_DOAN)))
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input disabled type="number" class="form-control number-1" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                @else
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="number" class="form-control" value="{{$tiensubenhan->NAM_CHUAN_DOAN}}" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                @endif
            </tr>
            <tr>
                <th>
                    <div class="form-check col-sm-12">
                        <input class="form-check-input check-1" type="checkbox" name="TIEN_SU_BAN_THAN[]" value="Dai thao duong"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Đái tháo đường
                        </label>
                    </div>
                </th>
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="number" disabled class="form-control number-1" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="form-check col-sm-12">
                        <input class="form-check-input" type="checkbox" name="TIEN_SU_BAN_THAN[]" value="Dai thao duong thai ky"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Đái tháo đường thai kỳ
                        </label>
                    </div>
                </th>
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="number" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="form-check col-sm-12">
                        <input class="form-check-input" type="checkbox" value="dau thac lung" name="TIEN_SU_BAN_THAN[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Đau thắc lưng
                        </label>
                    </div>
                </th>
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="number" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="form-check col-sm-12">
                        <input class="form-check-input" type="checkbox" value="dot quy" name="TIEN_SU_BAN_THAN[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Đột quỵ
                        </label>
                    </div>
                </th>
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="number" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="form-check col-sm-12">
                        <input class="form-check-input" type="checkbox" value="benh dmv or nhoi mau co tim" name="TIEN_SU_BAN_THAN[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Bệnh DMV/Nhồi máu cơ tim
                        </label>
                    </div>
                </th>
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="number" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="form-check col-sm-12">
                        <input class="form-check-input" type="checkbox" value="benh than mang suy than" name="TIEN_SU_BAN_THAN[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Bệnh thận mạng suy thận
                        </label>
                    </div>
                </th>
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="number" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="form-check col-sm-12">
                        <input class="form-check-input" type="checkbox" value="suy tim" name="TIEN_SU_BENH_AN[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Suy tim
                        </label>
                    </div>
                </th>
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="number" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="form-check col-sm-12">
                        <input class="form-check-input" type="checkbox" value="hen phe quan" name="TIEN_SU_BAN_THAN[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Hen phế quản
                        </label>
                    </div>
                </th>
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="number" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="form-check col-sm-12">
                        <input class="form-check-input" type="checkbox" value="tram cam" name="TIEN_SU_BENH_AN[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Trầm cảm
                        </label>
                    </div>
                </th>
                <td>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="number" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table">
        <thead>
            <tr>
                <th scope="col-sm-3">Yếu tố nguy cơ khác</th>
                <th scope="col-sm-3">Năm chuẩn đoán nguy cơ</th>
                <th scope="col-sm-3">Yếu tố nguy cơ khác</th>
                <th scope="col-sm-3">Năm chuẩn đoán nguy cơ</th>
                <th scope="col-sm-3">Yếu tố nguy cơ khác</th>
                <th scope="col-sm-3">Năm chuẩn đoán nguy cơ</th>
                <th scope="col-sm-3">Yếu tố nguy cơ khác</th>
                <th scope="col-sm-3">Năm chuẩn đoán nguy cơ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="hut thuoc la" name="YEU_TO_NGUY_CO[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Hút thuốc lá :
                        </label>
                        
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="YEU_TO_NGUY_CO[]" value="Uong nhieu bia ruou"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Uống nhiều bia rượu
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="An it rau" name="YEU_TO_NGUY_CO[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ăn ít rau
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="An nhieu mo dong vat" name="YEU_TO_NGUY_CO[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ăn nhiều mỡ động vật
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="An man" name="YEU_TO_NGUY_CO[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ăn mặn
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Loi song tinh lai" name="YEU_TO_NGUY_CO[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lối sống tĩnh lại
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="YEU_TO_NGUY_CO[]" value="co con tren 3.6 kg"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Có con trên 3.6 KG
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Tiep xuc bui hoa chat" name="YEU_TO_NGUY_CO[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Tiếp xúc bụi hóa chất
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Stress" name="YEU_TO_NGUY_CO[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Stress
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Man kinh som" name="YEU_TO_NGUY_CO[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Mãn kinh sớm
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Roi loan lipid mau" name="YEU_TO_NGUY_CO[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Rối loạn lipid máu
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Thua can va beo phi" name="YEU_TO_NGUY_CO[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Thừa cân/ béo phì
                        </label>
                    </div>
                </th>
                <td>
                    <div class="">
                        <div class="">
                            <input type="numer" class="form-control" name="NAM_CHUAN_DOAN[]">
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tiền sử gia đình bệnh nhân</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Tang huyet ap" name="TIEU_SU_GIA_DINH[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Tăng huyết áp
                        </label>
                    </div>
                </th>
                <th>
                    <div class="form-check"> 
                        <input class="form-check-input" type="checkbox" value="Hen phe quan" name="TIEU_SU_GIA_DINH[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Hen phế quản
                        </label>
                    </div>
                </th>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Dai thao duong" name="TIEU_SU_GIA_DINH[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Đái tháo đường
                        </label>
                    </div>
                </th>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Ung thu mau" name="TIEU_SU_GIA_DINH[]"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ung thư máu
                        </label>
                    </div>
                </th>
            </tr>
    </table>
    <div class="mt-3">
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
            <button type="submit" class="btn btn-primary">Tải lên</button>
        </div>
    </div>

</form>
