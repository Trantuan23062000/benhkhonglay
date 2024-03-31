@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <h5 class="card-title text-center">Hồ sơ bệnh án</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalthem">
                    Thêm dữ liệu
                </button>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <h5 class="card-title text-center">Phiếu chỉ định cận lâm sàng</h5>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalthem3">
                    Thêm dữ liệu
                </button>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <h5 class="card-title text-center">Đơn thuốc</h5>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalthem1">
                    Thêm dữ liệu
                </button>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <h5 class="card-title text-center">Đối tượng mắc bệnh</h5>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalthem2">
                    Thêm dữ liệu
                </button>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">



                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Thông Tin Bệnh Án</h3>
                            <h4>
                                <button type="button" class="btn btn-outline-success float-end" data-bs-toggle="modal"
                                    data-bs-target="#exportexcel"><i class="ri-add-fill"></i> Nhập dữ liệu Excel</button>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="search"
                                        placeholder="Nhập thông bệnh nhân cần tìm... " required>
                                </div>

                            </h4>
                        </div>

                        <div id="success_message"></div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã bệnh án </th>
                                    <th scope="col">Mã đối tượng</th>
                                    <th scope="col">Mã lần khám</th>
                                    <th scope="col">Ngày tiếp nhận</th>
                                    <th scope="col">Ngày kết thúc</th>

                                </tr>
                            </thead>
                            <tbody id="data">



                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">



                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Thông Tin chi tiết phiếu cận lâm sàng</h3>
                            <h4>
                                <button type="button" class="btn btn-outline-success float-end" data-bs-toggle="modal"
                                    data-bs-target="#exportexcel"><i class="ri-add-fill"></i> Nhập dữ liệu Excel</button>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="search"
                                        placeholder="Nhập phiếu cận lâm sàng cần tìm... " required>
                                </div>

                            </h4>
                        </div>

                        <div id="success_message"></div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã phiếu cận lâm sàng</th>
                                    <th scope="col">Tên bác sĩ chỉ định</th>
                                    <th scope="col">Ngày chỉ định</th>
                                </tr>
                            </thead>
                            <tbody id="data4">



                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">



                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Thông Tin đối tượng mắc bệnh</h3>
                            <h4>
                                <button type="button" class="btn btn-outline-success float-end" data-bs-toggle="modal"
                                    data-bs-target="#exportexcel"><i class="ri-add-fill"></i> Nhập dữ liệu Excel</button>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="search"
                                        placeholder="Nhập thông tin đối tượng cần tìm... " required>
                                </div>

                            </h4>
                        </div>

                        <div id="success_message"></div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã định danh</th>
                                    <th scope="col">Mã đối tượng</th>
                                    <th scope="col">Họ tên</th>
                                </tr>
                            </thead>
                            <tbody id="data">



                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">



                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Thông tin đơn thuốc</h3>
                            <h4>
                                <button type="button" class="btn btn-outline-success float-end" data-bs-toggle="modal"
                                    data-bs-target="#exportexcel"><i class="ri-add-fill"></i> Nhập dữ liệu Excel</button>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="search"
                                        placeholder="Nhập đơn thuốc cần tìm... " required>
                                </div>

                            </h4>
                        </div>

                        <div id="success_message"></div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã toa thuốc</th>
                                    <th scope="col">Ngày kê toa</th>
                                    <th scope="col">Ngày kê toa đến</th>
                                    <th scope="col">Ngày kết thúc toa</th>
                                </tr>
                            </thead>
                            <tbody id="data">



                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="modalthem" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload dữ liệu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <ul id="them-error"></ul>
                        <form id="them" action="" method="POST">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Mã cơ sở khám chữa bệnh</label>
                                    <input type="text" name="MCSKCB" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã đối tượng</label>
                                    <input type="text" name="MA_DOI_TUONG" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã lần khám</label>
                                    <input type="text" name="MA_LAN_KHAM" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Ngày tiếp nhận</label>
                                    <input type="text" name="NGAY_TIEP_NHAN" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Ngày kết thúc khám</label>
                                    <input type="text" name="NGAY_KET_THUC_KHAM" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Quá trình bệnh lí</label>
                                    <input type="text" name="QUA_TRINH_BENH_LY" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Tiểu sử bản thân</label>
                                    <input type="text" name="TIEU_SU_BAN_THAN" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Tiểu sử gia đình</label>
                                    <input type="text" name="TIEU_SU_GIA_DINH" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Chiều cao</label>
                                    <input type="text" name="CHIEU_CAO" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Huyết áp cao</label>
                                    <input type="text" name="HUYET_AP_CAO" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Huyết áp thấp</label>
                                    <input type="text" name="HUYET_AP_THAP" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Cân nặng</label>
                                    <input type="text" name="CANG_NANG" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Mạch</label>
                                    <input type="text" name="MACH" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">BMI</label>
                                    <input type="text" name="BMI" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Nhiệt độ</label>
                                    <input type="text" name="NHIET_DO" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Nhịp thuở</label>
                                    <input type="text" name="NHIP_THO" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Đường máu</label>
                                    <input type="text" name="DUONG_MAU" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Vòng eo</label>
                                    <input type="text" name="VONG_EO" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Nồng độ chất béo</label>
                                    <input type="text" name="NONG_DO_CHAT_BEO" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Chuẩn đoán khám bệnh</label>
                                    <input type="text" name="CHUAN_DOAN_KHAM_BENH" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4">
                                    <label for="">Hướng giải quyết</label>
                                    <input type="text" name="HUONG_GIAI_QUYET" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Mã phiếu cận lâm sàng</label>
                                    <input type="text" name="MA_PHIEU_CLS" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Mã toa thuốc</label>
                                    <input type="number" name="MA_TOA_THUOC" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <label for="">Ngày bắt đầu điều trị</label>
                                    <input type="date" name="NGAY_BAT_DAU_DEU_TRI" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Ngày kết thúc điều trị</label>
                                    <input type="date" name="NGAY_KET_THUC_DIEU_TRI" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <label for="">Lí do đều trị</label>
                                    <input type="text" name="LI_DO_DEU_TRI" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Lí do kết thúc đều trị</label>
                                    <input type="text" name="LI_DO_KET_THUC_DEU_TRI" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-4">
                                    <label for="">Chuẩn đoán kết thúc đều trị</label>
                                    <input type="text" name="CHUAN_DOAN_KET_THUC_DEU_TRI" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Kết quả đều trị</label>
                                    <input type="text" name="KET_QUA_DEU_TRI" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Tình trạng ra viện</label>
                                    <input type="text" name="TINH_TRANG_RA_VIEN" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                                    <button type="submit" class="btn btn-primary">Tải lên</button>
                                </div>
                            </div>

                        </form>

                    </div>


                </div>
            </div>
        </div>

        <div class="modal fade" id="modalthem1" tabindex="-1" aria-labelledby="AddStudentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload dữ liệu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <ul id="them-error"></ul>
                        <form id="them" action="" method="POST">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Mã toa thuốc</label>
                                    <input type="text" name="MA_TOA_THUOC" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Ngày kê toa</label>
                                    <input type="date" name="TOA_KE_TU" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Ngày kê toa đến</label>
                                    <input type="date" name="TOA_KE_DEN" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Ngày kê</label>
                                    <input type="date" name="NGAY_KE    " class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Ghi chú </label>
                                    <input type="text" name="GHI_CHU1" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã thuốc </label>
                                    <input type="text" name="MA_THUOC" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã nhóm</label>
                                    <input type="text" name="MA_NHOM" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Tên thuốc</label>
                                    <input type="text" name="TEN_THUOC" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Đơn vị tính </label>
                                    <input type="text" name="DON_VI_TINH" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Hàm lượng </label>
                                    <input type="text" name="HAM_LUONG" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Đường dùng</label>
                                    <input type="text" name="DUONG_DUNG" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Liều dùng</label>
                                    <input type="text" name="LIEU_DUNG" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Sổ đăng kí </label>
                                    <input type="text" name="SO_DANG_KI" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã nơi cung cấp thuốc</label>
                                    <input type="text" name="TT_THAU" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Phạm vi</label>
                                    <input type="text" name="DUONG_DUNG" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Tỷ lệ thanh toán</label>
                                    <input type="text" name="TI_LE_TT" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Số lượng </label>
                                    <input type="text" name="SO_LUONG" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Đơn giá</label>
                                    <input type="text" name="DON_GIA" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Thành tiền</label>
                                    <input type="text" name="THANH_TIEN" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mức hưởng</label>
                                    <input type="text" name="MUC_HUONG" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Quy cách đóng gói </label>
                                    <input type="text" name="QUY_CACH_DONG_GOI" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Hoạt chất</label>
                                    <input type="text" name="HOAT_CHAT" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Số lô</label>
                                    <input type="text" name="SO_LO" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Biệt dược</label>
                                    <input type="text" name="BIET_DUOC" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Hạn dùng </label>
                                    <input type="text" name="HAN_DUNG" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Ghi chú</label>
                                    <input type="text" name="GHI_CHU" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã lần khám</label>
                                    <input type="text" name="MA_LAN_KHAM" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã cơ sở khám chữa bệnh</label>
                                    <input type="text" name="MA_CSKCB" class="form-control">
                                </div>
                            </div>


                            <div class="mt-3">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                                    <button type="submit" class="btn btn-primary">Tải lên</button>
                                </div>
                            </div>

                        </form>

                    </div>


                </div>
            </div>
        </div>

        <div class="modal fade" id="modalthem2" tabindex="-1" aria-labelledby="AddStudentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload dữ liệu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <ul id="them-error"></ul>
                        <form id="them" action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="inputText" class="">Mã định danh</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="MA_DINH_DANH_V20">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label for="">Mã đối tượng</label>
                                    <select id="" class="form-control custom-select" required name="MA_DOI_TUONG" required
                                        autofocus>
                                        <option value="">Đối tượng</option>

                                        <option value="">
                                        </option>

                                    </select>
                                </div>



                                <div class="col-sm-4">
                                    <label for="inputText" class="">Họ tên</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="HO_TEN">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Chọn giới tính</label>
                                    <select class="form-select" aria-label="Default select example" name="GIOI_TINH">
                                        <option selected>Chọn giới tính</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                        <option value="3">Khác</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="inputText" class="">Ngày sinh</label>
                                    <div class="">
                                        <input type="date" required class="form-control" name="NGAY_SINH">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="inputText" class="">Số điện thoại</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="SO_DIEN_THOAI">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Dân tộc</label>
                                    <select id="" class="form-control custom-select" required name="MA_DAN_TOC" autofocus>
                                        <option value="">Mã dân tộc</option>
                                        @foreach ($dantoc as $item)
                                            <option value="{{ $item->MA_DAN_TOC }}">{{ $item->TEN_DAN_TOC }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="inputText" class="">CMND</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="SO_CMND">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Nghề nghiệp</label>
                                    <select id="" class="form-control custom-select" name="MA_NGHE_NGHIEP_ID" required
                                        autofocus>
                                        <option value="">Chọn nghề nghiệp</option>
                                        @foreach ($nghenghiep as $item)
                                            <option value="{{ $item->MA_NGHE_NGHIEP }}">{{ $item->TEN_NGHE_NGHIEP }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã tĩnh hộ khẩu</label>
                                    <select id="tinhnt" class="form-control custom-select" name="MA_TINH_HO_KHAU" required
                                        autofocus>
                                        <option value="">Mã tĩnh</option>
                                        @foreach ($tinh as $item)
                                            <option value="{{ $item->MA_TINH }}">{{ $item->TEN_TINH }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã huyện hộ khẩu</label>
                                    <select id="huyennt" class="form-control custom-select" required
                                        name="MA_HUYEN_HO_KHAU" required autofocus>
                                        <option value="">Mã huyện</option>
                                        @foreach ($huyen as $item)
                                            <option value="{{ $item->MA_HUYEN }}">{{ $item->TEN_HUYEN }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Xã hộ khẩu</label>
                                    <select id="xant" class="form-control custom-select" required name="MA_XA_HO_KHAU"
                                        required autofocus>
                                        <option value="">Mã xã</option>
                                        @foreach ($xa as $item)
                                            <option value="{{ $item->MA_XA }}">{{ $item->TEN_XA }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="inputText" class="">Địa chỉ hộ khẩu chi tiết</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="HO_KHAU_DIA_CHI">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã tĩnh tạm trú</label>
                                    <select id="tinhtt" class="form-control custom-select" required name="MA_TINH_TAM_TRU"
                                        autofocus>
                                        <option value="">Tĩnh tạm trú</option>
                                        @foreach ($tinh as $item)
                                            <option value="{{ $item->MA_TINH }}">{{ $item->TEN_TINH }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã huyện tạm trú</label>
                                    <select id="huyentt" class="form-control custom-select" required
                                        name="MA_HUYEN_TAM_TRU" autofocus>
                                        <option value="">Huyện tạm trú</option>

                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Mã xã tạm trú</label>
                                    <select id="xatt" class="form-control custom-select" required name="MA_XA_TAM_TRU"
                                        autofocus>
                                        <option value="">Xã tạm trú</option>

                                    </select>
                                </div>
                                <div class="col-sm-3 ">
                                    <label for="inputText" class="">Địa chỉ tạm trú chi tiết</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="TAM_TRU_DIA_CHI">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="inputText" class="">Họ tên người thân</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="HO_TEN_NGUOI_THAN">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="inputText" class="">Ngày sinh người thân</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="NGAY_SINH_NGUOI_THAN">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="inputText" class="">Địa chỉ người thân</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="DIA_CHI">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="inputText" class="">SDT người thân</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="SDT_NGUOI_THAN">
                                    </div>
                                </div>
                                <div class="col-sm-2 mb-4">
                                    <label for="inputText" class="">Nghề nghiệp</label>
                                    <div class="">
                                        <input type="text" required class="form-control" name="NGHE_NGHIEP_NGUOI_THAN">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                                    <button type="submit" class="btn btn-primary">Tải lên</button>
                                </div>
                            </div>

                        </form>

                    </div>


                </div>
            </div>
        </div>

        <div class="modal fade" id="modalthem3" tabindex="-1" aria-labelledby="AddStudentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload dữ liệu chi tiết cận lâm sàng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <ul id="them-error"></ul>
                        <form id="them3" action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4 mt-3">
                                    <label for="inputText" class="">Mã phiếu cận lâm sàng</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="MA_PHIEU_CLS">
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <label for="">Đơn vị kĩ thuật</label>
                                    <select id="" class="form-control custom-select" name="MA_DVKT" autofocus>
                                        <option value="">Chọn đơn vị kĩ thuật</option>
                                        @foreach ($dvkt as $item)
                                            <option value="{{ $item->MA_DVKT }}">{{ $item->TEN_DVKT }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <label for="inputText" class="">Số lượng</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="SO_LUONG">
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <label for="inputText" class="">Đơn giá</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="DON_GIA">
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <label for="inputText" class="">Tên bác sĩ chỉ định</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="TEN_BS_CHI_DINH">
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <label for="inputText" class="">Kết quả</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="KET_QUA">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                                    <button type="submit" class="btn btn-primary">Tải lên</button>
                                </div>
                            </div>

                        </form>

                    </div>


                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-sua" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Cập nhật dữ liệu</h5>
                        <button type="hi" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">



                        <div id="sua-error"></div>
                        <div id="data-sua"></div>

                    </div>


                </div>
            </div>
        </div>
    @stop
    @section('js')
        <script>
         $(document).ready(function() {
            let meta = "{{ url('') }}";
            canlamsang();

            function canlamsang() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('canlamsang.loaddata') }}",
                    success: function(response) {
                        console.log(response);
                        let html = '';
                        response.forEach(item => {
                            //console.log(item.doituong);
                            html += ' <tr>';
                            html += ' <th scope="row">' + item.MA_PHIEU_CLS + '</th>';
                            html += ' <td>' + item.TEN_BS_CHI_DINH + '</td>';
                            html += ' <td>' + item.NGAY_CHI_DINH + '</td>';
                            html += '<td><button value="' + item.MA_PHIEU_CLS +
                                '" type="button" class="btn btn-warning btnsua "><i class="ri-edit-line"></i></button></td>';
                            html += '<td><a value="' + item.MA_PHIEU_CLS +
                                '" type="button" class="btn btn-danger btnxoa"><i class="ri-delete-bin-line"></i></button></td>';
                            html += ' </tr>';
                        });
                        $('#data4').html(html);

                    }
                });
            }
            $(document).on('submit', '#them3', function(e) {
                e.preventDefault();

                let data = $('#them3').serialize();
               
                $.ajax({

                    type: "POST",
                    url: "{{ route('canlamsang.store') }}",
                    data: data,
                    success: function(response) {

                        console.log(response);
                        if (response.code === 200) {

                            $('#modalthem3').modal('hide');
                            $('#them3')[0].reset();
                            canlamsang();

                            Swal.fire(
                                'Thêm dữ liệu thành công !'
                            );
                        } else {
                            let mess = '';
                            for (let error of response.error) {
                                mess += '';
                                mess +=
                                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                mess += '<strong>' + error + '';
                                mess +=
                                    ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                mess += ' </div>';
                                mess += '';
                            }
                            $('#them-error').html(mess);

                        }
                    }
                });
            });

        });
        </script>
    @stop
