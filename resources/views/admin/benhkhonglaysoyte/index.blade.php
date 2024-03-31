@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-sm-2">
            <div class="card">
                <h5 class="card-title text-center">Thông tin bệnh nhân</h5>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalthem2">
                    Thêm dữ liệu
                </button>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <h5 class="card-title text-center">Phiếu cận lâm sàng</h5>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalthem3">
                    Thêm dữ liệu
                </button>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <h5 class="card-title text-center">Đơn thuốc</h5>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalthem1">
                    Thêm dữ liệu
                </button>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <h5 class="card-title text-center">Hồ sơ bệnh án</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalthem">
                    Thêm dữ liệu
                </button>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <h5 class="card-title text-center">Tiền sử bản thân</h5>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#modalthemtiensubenh">
                    Thêm dữ liệu
                </button>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <h5 class="card-title text-center">Thống kê</h5>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#modalthemtiensubenh">
                    Xem
                </button>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">



                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Thông tin bệnh án</h3>
                            <h4>
                                <button type="button" class="btn btn-outline-success float-end" data-bs-toggle="modal"
                                    data-bs-target="#exportexcel"><i class="ri-add-fill"></i> Nhập dữ liệu Excel</button>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="search"
                                        placeholder="Nhập thông tin bệnh án cần tìm... ">
                                </div>

                            </h4>
                        </div>

                        <div id="success_message"></div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã bệnh án</th>
                                    <th scope="col">Thời gian khám bệnh</th>
                                    <th scope="col">Ngày kết thúc khám</th>
                                </tr>
                            </thead>
                            <tbody id="datathongtinbenhan">



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
                            <h3 class="text-center">Thông Tin bệnh nhân</h3>
                            <h4>
                                <button type="button" class="btn btn-outline-success float-end" data-bs-toggle="modal"
                                    data-bs-target="#exportexcel"><i class="ri-add-fill"></i> Nhập dữ liệu Excel</button>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="search"
                                        placeholder="Nhập thông tin đối tượng cần tìm... ">
                                </div>

                            </h4>
                        </div>

                        <div id="success_message"></div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã định danh V_20</th>
                                    <th scope="col">Mã hồ sơ</th>
                                    <th scope="col">Họ tên</th>
                                    <th scope="col">Giới tính</th>
                                    <th scope="col">Số điện thoại</th>
                                </tr>
                            </thead>
                            <tbody id="data3">



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
                                        placeholder="Nhập phiếu cận lâm sàng cần tìm... ">
                                </div>

                            </h4>
                        </div>

                        <div id="success_message"></div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã phiếu cận lâm sàng</th>
                                    <th scope="col">Tên bác sĩ chỉ định</th>
                                    <th scope="col">Thời gian chỉ định</th>
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
                            <h3 class="text-center">Thông tin đơn thuốc</h3>
                            <h4>
                                <button type="button" class="btn btn-outline-success float-end" data-bs-toggle="modal"
                                    data-bs-target="#exportexcel"><i class="ri-add-fill"></i> Nhập dữ liệu Excel</button>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="search"
                                        placeholder="Nhập đơn thuốc cần tìm... ">
                                </div>

                            </h4>
                        </div>

                        <div id="success_message"></div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Mã toa thuốc</th>
                                    <th scope="col">Ngày kê toa</th>
                                    <th scope="col">Ngày kê toa đến</th>
                                    <th scope="col">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody id="data1">



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
                            <h3 class="text-center">Tiền sử bệnh tật</h3>
                            <h4>
                                <button type="button" class="btn btn-outline-success float-end" data-bs-toggle="modal"
                                    data-bs-target="#exportexcel"><i class="ri-add-fill"></i> Nhập dữ liệu Excel</button>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="search"
                                        placeholder="Nhập đơn thuốc cần tìm... ">
                                </div>

                            </h4>
                        </div>

                        <div id="success_message"></div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Họ tên</th>
                                    <th scope="col">Thời gian ghi nhận</th>
                                    <th scope="col">Số ngoại trú</th>
                                    <th scope="col">Mã y tế</th>
                                </tr>
                            </thead>
                            <tbody id="datatiensubenhtat">



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
                        <h5 class="modal-title">Thông tin hồ sơ bệnh án</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <ul id="them-error"></ul>
                        <form id="them" action="" method="POST">
                            @csrf
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
                                    <input type="text" name="MA_BENH_AN" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Chọn bệnh nhân khám bệnh</label>
                                    <select class="form-control custom-select" name="DOI_TUONG_MAC_BENH_ID" autofocus>
                                        <option>Chọn tên bệnh nhân</option>
                                        @foreach ($doituongmacbenh as $item)
                                            <option value="{{ $item->ID }}">{{ $item->HO_TEN }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Lí do khám</label>
                                    <select id="" class="form-control custom-select" name="LI_DO_KHAM" autofocus>
                                        <option value="1">Đến hẹn</option>
                                        <option value="0">Lí do khác</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4">
                                    <label for="">Ngày tiếp nhận</label>
                                    <input type="date" name="NGAY_TIEP_NHAN" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Ngày kết thúc khám</label>
                                    <input type="date" name="NGAY_KET_THUC_KHAM" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Quá trình bệnh lí</label>
                                    <input type="text" name="QUA_TRINH_BENH_LY" class="form-control">
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
                                    <input type="text" name="CHUAN_DOAN_KHAM_BENH" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Triệu chứng</label>
                                    <input type="text" name="TRIEU_CHUNG" class="form-control">
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
                                    <input type="text" name="CAN_NANG" class="form-control">
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
                                    <input type="text" name="NON_DO_CHAT_BEO" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Tiểu sử bệnh tật</label>
                                    <select id="" class="form-control custom-select" name="TIEN_SU_BAN_THAN_ID" autofocus>
                                        <option value="">Chọn tên bệnh nhân</option>
                                        @foreach ($tiensubenhan as $item)
                                            <option value="{{ $item->ID }}">{{ $item->HO_TEN }}</option>
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
                                    <input type="text" name="HUONG_GIAI_QUYET" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Chọn bệnh nhân xét nghiệm</label>
                                    <select id="" class="form-control custom-select" name="MA_PHIEU_CLS" autofocus>
                                        <option value="">Tên bệnh nhân</option>
                                        @foreach ($canlamsang as $item)
                                            <option value="{{ $item->MA_PHIEU_CLS }}">{{ $item->HO_TEN }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Chọn bệnh nhân lập thuốc</label>
                                    <select id="" class="form-control custom-select" name="MA_TOA_THUOC" autofocus>
                                        <option value="">Chọn</option>
                                        @foreach ($donthuoc as $item)
                                            <option value="{{ $item->MA_TOA_THUOC }}">{{ $item->HO_TEN }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6">
                                        <label for="">Ngày bắt đầu điều trị</label>
                                        <input type="date" name="NGAY_BAT_DAU_DEU_TRI" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Ngày kết thúc điều trị</label>
                                        <input type="date" name="NGAY_KET_THUC_DEU_TRI" class="form-control">
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
                        <h5 class="modal-title">Đơn Thuốc</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <ul id="them-error2"></ul>
                        <form id="them1" action="" method="POST">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <label for="">Mã toa thuốc</label>
                                    <input type="text" name="MA_TOA_THUOC" class="form-control">
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <label for="">Mã hồ sơ</label>
                                    <select id="" class="form-control custom-select" name="MA_LAN_KHAM" autofocus>
                                        <option value="">Chọn tên bệnh nhân</option>
                                        @foreach ($doituongmacbenh as $item)
                                            <option value="{{ $item->ID }}">{{ $item->HO_TEN }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Ngày kê toa đến</label>
                                    <input type="date" name="TOA_KE_DEN" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Tỉ lệ thanh toán</label>
                                    <select id="" class="form-control custom-select" name="TYLE_TT" autofocus>
                                        <option value="">Tỷ lệ thanh toán</option>
                                        <option value="100">100% BHYT</option>
                                        <option value=" 70">70% BHYT</option>
                                        <option value=" 50">50% BHYT</option>
                                        <option value="30">30% BHYT</option>
                                        <option value="0">BHYT không thanh toán</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mt-3">
                                        <table class="table col-sm-12">

                                            <thead>
                                                <tr>
                                                    <th class="hh">Kê đơn đều trị:</th>
                                                </tr>
                                                <div class="col-sm-3 mb-3">
                                                    <label for="">Thêm số lượng thuốc:</label>
                                                    <input id="sl" type="number" min="1" max="20" class="form-control">
                                                    <button href="" type="button" class="btn btn-success" id="themthuoc">
                                                        <i class="ri-add-box-fill"></i>Thêm thuốc</button></td>
                                                    </tr>
                                                </div>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Thuốc - Hàm lượng</th>
                                                    <th>Liều dùng</th>
                                                    <th>Đơn giá</th>
                                                    <th>Số lượng</th>
                                                </tr>
                                            </tbody>

                                        </table>
                                        <div id="them-thuoc"></div>

                                    </div>

                                    {{-- <div class="col-sm-3">
                                    <label for="">Liều dùng</label>
                                    <select id="" class="form-control custom-select" name="LIEU_DUNG" autofocus>
                                        <option value="2 viên/2lần * 2 lần/ngày">2 viên/ngày</option>
                                        <option value="1 viên/1lần * lần/ngày ">viên/ngày</option>
                                        <option value="3 viên/3lần * 3 lần/ngày ">3 viên/ngày</option>
                                    </select>
                                </div> --}}
                                    <div class="mt-3">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Thoát</button>
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
                        <h5 class="modal-title">Upload dữ liệu thông tin bệnh nhân</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <ul id="them-error1"></ul>
                        <form id="them2" action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">Mã định danh</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="MA_DINH_DANH_V20">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">Mã hồ sơ</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="MA_HO_SO">
                                    </div>
                                </div>

                                <div class="col-sm-4 mb-4">
                                    <label for="">Mã đối tượng</label>
                                    <select id="" class="form-control custom-select" name="MA_DOI_TUONG" autofocus>
                                        <option value="0">Có BHYT</option>

                                        <option value="1">Không BHYT</option>
                                        <option value="2">Khác</option>


                                    </select>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">Số BHYT</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="SO_BHYT">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">HSD BHYT</label>
                                    <div class="">
                                        <input type="date" class="form-control" name="HSD_BHYT">
                                    </div>
                                </div>



                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">Họ tên</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="HO_TEN">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="">Chọn giới tính</label>
                                    <select class="form-select" aria-label="Default select example" name="GIOI_TINH">
                                        <option selected>Chọn giới tính</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                        <option value="3">Khác</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">Ngày sinh</label>
                                    <div class="">
                                        <input type="date" class="form-control" name="NGAY_SINH">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">Số điện thoại</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="SO_DIEN_THOAI">
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <label for="">Dân tộc</label>
                                    <select id="" class="form-control custom-select" name="MA_DAN_TOC" autofocus>
                                        <option value="">Chọn dân tộc</option>
                                        @foreach ($dantoc as $item)
                                            <option value="{{ $item->MA_DAN_TOC }}">{{ $item->TEN_DAN_TOC }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <label for="inputText" class="">Số CMND</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="SO_CMND">
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <label for="">Nghề nghiệp</label>
                                    <select id="" class="form-control custom-select" name="MA_NGHE_NGHIEP_ID" autofocus>
                                        <option value="">Chọn nghề nghiệp</option>
                                        @foreach ($nghenghiep as $item)
                                            <option value="{{ $item->MA_NGHE_NGHIEP }}">{{ $item->TEN_NGHE_NGHIEP }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <label for="inputText" class="">Nơi làm việc</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="NOI_LAM_VIEC">
                                    </div>
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
                                <div class="col-sm-3 mb-4">
                                    <label for="">Mã huyện hộ khẩu</label>
                                    <select id="huyennt" class="form-control custom-select" name="MA_HUYEN_HO_KHAU"
                                        autofocus>
                                        <option value="">Mã huyện</option>

                                    </select>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <label for="">Xã hộ khẩu</label>
                                    <select id="xant" class="form-control custom-select" name="MA_XA_HO_KHAU" autofocus>
                                        <option value="">Mã xã</option>

                                    </select>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <label for="inputText" class="">Địa chỉ hộ khẩu chi tiết</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="HO_KHAU_DIA_CHI">
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
                                <div class="col-sm-3 mb-4">
                                    <label for="">Mã huyện tạm trú</label>
                                    <select id="huyentt" class="form-control custom-select" name="MA_HUYEN_TAM_TRU"
                                        autofocus>
                                        <option value="">Huyện tạm trú</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <label for="">Mã xã tạm trú</label>
                                    <select id="xatt" class="form-control custom-select" name="MA_XA_TAM_TRU" autofocus>
                                        <option value="">Xã tạm trú</option>

                                    </select>
                                </div>
                                <div class="col-sm-3 mb-4 ">
                                    <label for="inputText" class="">Địa chỉ tạm trú chi tiết</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="TAM_TRU_DIA_CHI">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">Họ tên người thân</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="HO_TEN_NGUOI_THAN">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">Ngày sinh người thân</label>
                                    <div class="">
                                        <input type="date" class="form-control" name="NGAY_SINH_NGUOI_THAN">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">Địa chỉ người thân</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="DIA_CHI">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">SDT người thân</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="SDT_NGUOI_THAN">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="">Nghề nghiệp NT</label>
                                    <select id="" class="form-control custom-select" name="NGHE_NGHIEP_NGUOI_THAN"
                                        autofocus>
                                        <option value="">Chọn nghề nghiệp</option>
                                        @foreach ($nghenghiep as $item)
                                            <option value="{{ $item->MA_NGHE_NGHIEP }}">{{ $item->TEN_NGHE_NGHIEP }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <label for="inputText" class="">Nơi làm việc NT</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="NOI_LAM_VIEC_NT">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <label for="inputText" class="">Chuẩn đoán năm</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="CHUAN_DOAN_NAM">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <label for="inputText" class="">Chuẩn đoán tại</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="CHUAN_DOAN_TAI_CO_SO">
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

                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="dai thao duong" id="flexCheckDefault"
                                                            name="BENH_KLN_DANG_MAC[]">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Bệnh đái tháo đường
                                                        </label>
                                                    </div>
                                                </th>


                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="Mau nhiem mo" id="flexCheckDefault"
                                                            name="BENH_KLN_DANG_MAC[]">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Máu nhiễm mỡ
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Tieu duong"
                                                            id="flexCheckDefault" name="BENH_KLN_DANG_MAC[]">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Tiểu đường
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="Hen phe quan" id="flexCheckDefault"
                                                            name="BENH_KLN_DANG_MAC[]">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Hen phế quản
                                                        </label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="mb-3">
                                        <label for="tieude" class="form-label">
                                            <h4>Bệnh khác nếu có:</h4>
                                        </label>
                                        <input name="BENH_KHAC" type="text" class="form-control" aria-describedby="">
                                        <div class="invalid-feedback"></div>
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

        <div class="modal fade" id="modalthemtiensubenh" tabindex="-1" aria-labelledby="AddStudentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload dữ liệu tiền sử bệnh nhân</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <ul id="them-errortieusubenhan"></ul>
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
                                                    <input type="text" class="form-control" name="SO_NGOAI_TRU">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="inputText" class="">Số y tế:</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="MA_YT">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-4">
                                                <label for="inputText" class="">Họ tên:</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="HO_TEN">
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
                                        <th>
                                            <div class="col-sm-12"></div>
                                            <div class="form-check col-sm-6">
                                                <input class="form-check-input" name="TIEN_SU_BAN_THAN[]" type="checkbox"
                                                    value="Tang huyet ap" id="tanghuyetap">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Tăng huyết áp
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" name="NAM_CHUAN_DOAN[]">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" name="TIEN_SU_BAN_THAN[]"
                                                    value="Dai thao duong" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Đái tháo đường
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" name="NAM_CHUAN_DOAN[]">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" name="TIEN_SU_BAN_THAN[]"
                                                    value="Dai thao duong thai ky" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Đái tháo đường thai kỳ
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" name="NAM_CHUAN_DOAN[]">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" value="dau thac lung"
                                                    name="TIEN_SU_BAN_THAN[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Đau thắc lưng
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" name="NAM_CHUAN_DOAN[]">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" value="dot quy"
                                                    name="TIEN_SU_BAN_THAN[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Đột quỵ
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" name="NAM_CHUAN_DOAN[]">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox"
                                                    value="benh dmv or nhoi mau co tim" name="TIEN_SU_BAN_THAN[]"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Bệnh DMV/Nhồi máu cơ tim
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" name="NAM_CHUAN_DOAN[]">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox"
                                                    value="benh than mang suy than" name="TIEN_SU_BAN_THAN[]"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Bệnh thận mạng suy thận
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" name="NAM_CHUAN_DOAN[]">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" value="suy tim"
                                                    name="TIEN_SU_BENH_AN[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Suy tim
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" name="NAM_CHUAN_DOAN[]">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" value="hen phe quan"
                                                    name="TIEN_SU_BAN_THAN[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Hen phế quản
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" name="NAM_CHUAN_DOAN[]">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" value="tram cam"
                                                    name="TIEN_SU_BENH_AN[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Trầm cảm
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" name="NAM_CHUAN_DOAN[]">
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
                                                <input class="form-check-input" type="checkbox" value="hut thuoc la"
                                                    name="YEU_TO_NGUY_CO[]" id="flexCheckDefault">
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
                                                <input class="form-check-input" type="checkbox" name="YEU_TO_NGUY_CO[]"
                                                    value="Uong nhieu bia ruou" id="flexCheckDefault">
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
                                                <input class="form-check-input" type="checkbox" value="An it rau"
                                                    name="YEU_TO_NGUY_CO[]" id="flexCheckDefault">
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
                                                <input class="form-check-input" type="checkbox"
                                                    value="An nhieu mo dong vat" name="YEU_TO_NGUY_CO[]"
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
                                                <input class="form-check-input" type="checkbox" value="An man"
                                                    name="YEU_TO_NGUY_CO[]" id="flexCheckDefault">
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
                                                <input class="form-check-input" type="checkbox" value="Loi song tinh lai"
                                                    name="YEU_TO_NGUY_CO[]" id="flexCheckDefault">
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
                                                <input class="form-check-input" type="checkbox" name="YEU_TO_NGUY_CO[]"
                                                    value="co con tren 3.6 kg" id="flexCheckDefault">
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
                                                <input class="form-check-input" type="checkbox"
                                                    value="Tiep xuc bui hoa chat" name="YEU_TO_NGUY_CO[]"
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
                                                <input class="form-check-input" type="checkbox" value="Stress"
                                                    name="YEU_TO_NGUY_CO[]" id="flexCheckDefault">
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
                                                <input class="form-check-input" type="checkbox" value="Man kinh som"
                                                    name="YEU_TO_NGUY_CO[]" id="flexCheckDefault">
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
                                                <input class="form-check-input" type="checkbox" value="Roi loan lipid mau"
                                                    name="YEU_TO_NGUY_CO[]" id="flexCheckDefault">
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
                                                <input class="form-check-input" type="checkbox" value="Thua can va beo phi"
                                                    name="YEU_TO_NGUY_CO[]" id="flexCheckDefault">
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
                                                <input class="form-check-input" type="checkbox" value="Tang huyet ap"
                                                    name="TIEU_SU_GIA_DINH[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Tăng huyết áp
                                                </label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Hen phe quan"
                                                    name="TIEU_SU_GIA_DINH[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Hen phế quản
                                                </label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Dai thao duong"
                                                    name="TIEU_SU_GIA_DINH[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Đái tháo đường
                                                </label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Ung thu mau"
                                                    name="TIEU_SU_GIA_DINH[]" id="flexCheckDefault">
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

                    </div>


                </div>
            </div>
        </div>

        <div class="modal fade " id="modalcanlamsang" tabindex="-1" aria-labelledby="AddStudentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload dữ liệu chi tiết cận lâm sàng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <ul id="them-error3"></ul>
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
                                <div class="col-sm-6 mt-3">
                                    <label for="inputText" class="">Đơn giá</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="DON_GIA">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <label for="">Bác sĩ kiểm tra</label>
                                    <select id="" class="form-control custom-select" name="TEN_BS_CHI_DINH" autofocus>
                                        <option value="">Chọn bác sĩ kiểm tra</option>
                                        @foreach ($bacsi as $item)
                                            <option value="{{ $item->MABS }}">{{ $item->TEN_BS }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <label for="inputText" class="">Sinh hóa máu</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="SINH_HOA_MAU">
                                    </div>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">XNSH nước tiểu:</th>
                                        <th scope="col">Kết quả:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1.Bạch cầu (<10 /ml)</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="XET_NGHIEM_NT[]" value="bach cau">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2.Hồng cầu (<5 /ml)</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="XET_NGHIEM_NT[]" value="hong cau">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3 Protein(<0.1 g/L)</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="XET_NGHIEM_NT[]" value="protein">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4 Glucose(<0.1 g/L)</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="XET_NGHIEM_NT[]" value="glucose">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5 khác</th>
                                        <td>
                                            <div class="col-sm-6">
                                                <input class="" type="text" id="inlineCheckbox2"
                                                    name="XET_NGHIEM_KHAC">
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Điện tim:</th>
                                        <th scope="col">Kết quả:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1.Nhịp xoay</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="DIEN_TIM[]" value="nhip xoay">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dày nhĩ trái</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="DIEN_TIM[]" value="day nhi trai">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">NTT</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="DIEN_TIM[]" value="ntt">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rung nhĩ</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="DIEN_TIM[]" value="rung nhi">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">P phế</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="DIEN_TIM[]" value="p phe">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dày thất phải</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="DIEN_TIM[]" value="day that phai">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Khác</th>
                                        <td>
                                            <div class="col-sm-6">
                                                <input class="" type="text" id="inlineCheckbox2"
                                                    name="DIEN_TIM_KHAC" value="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">X quang phổi:</th>
                                        <th scope="col">Kết quả:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1.Khoang liên sườn mở rộng</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="X_QUANG_PHOI" value="khoang lien suon mo rong">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2.Vòm hoành hạ thấp,hình bậc thang</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="X_QUANG_PHOI" value="1">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3.Đường kín động mạch phổi phải thùy đưới > 16cm</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="X_QUANG_PHOI" value="1">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Khác</th>
                                        <td>
                                            <div class="col-sm-6">
                                                <input class="" type="text" id="inlineCheckbox2"
                                                    name="KET_QUA_KHAC" value="">
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Chức năng hô hấp:</th>
                                        <th scope="col">Kết quả:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1.Bình thường</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUC_NANG_HO_HAP[]" value="binh thuong">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2.Rối loạn thông khí hạn chế</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUC_NANG_HO_HAP[]" value="roi loan ho hap">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3.Rối loạn thông khí tắc nghẽn</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUC_NANG_HO_HAP[]" value="roi loan thong khi tac nghen">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">4.Test HPQ dương tính</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUC_NANG_HO_HAP[]" value="test hpq duong tinh">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Khác</th>
                                        <td>
                                            <div class="col-sm-6">
                                                <input class="" type="text" id="inlineCheckbox1"
                                                    name="HO_HAP_KHAC" value="">
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Lưu lượng đĩnh:</th>
                                        <th scope="col">Kết quả:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1.Bình thường,hoặc tăng > 80 % TSLT</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="LUU_LUONG_DINH[]" value="binh thuong hoac tang">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2.60%-80% TSLT</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="LUU_LUONG_DINH[]" value="60-80">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3.<60% TSLT</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="LUU_LUONG_DINH[]" value="60">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Khác</th>
                                        <td>
                                            <div class="col-sm-6">
                                                <input class="" type="text" id="inlineCheckbox1"
                                                    name="CLS_KHAC" value="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Chuẩn đoán</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1.Tăng huyết áp</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUAN_DOAN[]" value="tang huyet ap">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                    </tr>
                                    <tr>
                                        <th>2.Đái tháo đường</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUAN_DOAN[]" value="dai thao duong">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                    </tr>
                                    <tr>
                                        <th>Có biến chứng</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUAN_DOAN[]" value="co bien chung">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                    </tr>
                                    <tr>
                                        <th>3.Nguy cơ tim mạch tổng thể</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUAN_DOAN[]" value="nguy co mach co the">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                    </tr>
                                    <tr>
                                        <th>Nguy cơ tim mạch(khi có xét nghiệm)</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUAN_DOAN[]" value="nguy co tim mach">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                    </tr>
                                    <tr>
                                        <th>4.Bênh phổi tắc nghẽn mạn tính</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUAN_DOAN[]" value="benh phoi tac nghen man tinh">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                    </tr>
                                    <tr>
                                        <th>5.Hen phế quản</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUAN_DOAN[]" value="hen phe quan">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                    </tr>
                                    <tr>
                                        <th>Hen phế quản được kiểm soát</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="CHUAN_DOAN[]" value="hen phe quan duoc kiem soat">
                                                <label class="form-check-label" for="inlineCheckbox1">Có</label>
                                            </div>
                                    </tr>
                                    <tr>
                                        <th>Bệnh khác:</th>
                                        <td>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="CHUAN_DOAN_KHAC">
                                            </div>
                                    </tr>

                                </tbody>
                            </table>

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
                        <h5 class="modal-title" id="">Cập nhật dữ liệu </h5>
                        <button type="hi" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">



                        <div id="sua-error"></div>
                        <div id="data-sua"></div>

                    </div>


                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-view" tabindex="-1" aria-labelledby="AddStudentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="" class="text-center" style="font-weight:bold">
                            Xem thông tin</h5>
                        <button type="hi" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">



                        <div id="data-view"></div>

                    </div>


                </div>
            </div>
        </div>
    @stop
    @section('js')
        <script>
            doituongmacbenh();

            function doituongmacbenh() {
                $.get("{{ route('doituongmacbenh.data') }}", function(res) {
                    $('#data3').html(res);

                })
            };
            canlamsang();

            function canlamsang() {
                $.get("{{ route('canlamsang.data') }}", function(res) {
                    $('#data4').html(res);
                    //console.log(res);

                })

            };

            tiensubenhan();

            function tiensubenhan() {
                $.get("{{ route('tiensubenhan.data') }}", function(res) {
                    $('#datatiensubenhtat').html(res);
                    //console.log(res);

                })
            };
            thongtinbenhan();

            function thongtinbenhan() {
                $.get("{{ route('thongtinbenhan.data') }}", function(res) {
                    $('#datathongtinbenhan').html(res);
                    //console.log(res);

                })
            };

            donthuoc();

            function donthuoc() {
                $.get("{{ route('donthuoc.data') }}", function(res) {
                    $('#data1').html(res);
                    //console.log(res);

                })
            };


            $(document).on('click', '.btnxoa', function(e) {
                e.preventDefault();
                var ID = $(this).attr('href');
                Swal.fire({
                    title: 'Bạn có chắc ',
                    text: "Mọi hành động của bạn sẽ không được thay đỗi ",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = ID;
                        let token = "{{ csrf_token() }}";
                        let method = "DELETE";
                        let data = {
                            _method: method,
                            _token: token,
                        }
                        $.post(url, data, function(res) {
                            if (res.code === 200) {

                                doituongmacbenh();
                                Swal.fire(
                                    'Xóa dữ liệu thành công !'
                                );
                            }
                        })

                    }
                })
            });

            $(document).on('click', '.btnxoa', function(e) {
                e.preventDefault();
                var MA_TOA_THUOC = $(this).attr('href');
                Swal.fire({
                    title: 'Bạn có chắc ',
                    text: "Mọi hành động của bạn sẽ không được thay đỗi ",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = ID;
                        let token = "{{ csrf_token() }}";
                        let method = "DELETE";
                        let data = {
                            _method: method,
                            _token: token,
                        }
                        $.post(url, data, function(res) {
                            if (res.code === 200) {

                                donthuoc();
                                Swal.fire(
                                    'Xóa dữ liệu thành công !'
                                );
                            }
                        })

                    }
                })
            });

            $(document).on('click', '.btnxoa', function(e) {
                e.preventDefault();
                var ID = $(this).attr('href');
                Swal.fire({
                    title: 'Bạn có chắc ',
                    text: "Mọi hành động của bạn sẽ không được thay đỗi ",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = ID;
                        let token = "{{ csrf_token() }}";
                        let method = "DELETE";
                        let data = {
                            _method: method,
                            _token: token,
                        }
                        $.post(url, data, function(res) {
                            if (res.code === 200) {

                                tieusubenhtat();
                                Swal.fire(
                                    'Xóa dữ liệu thành công !'
                                );
                            }
                        })

                    }
                })
            });

            $(document).ready(function() {
                let meta = "{{ url('') }}";
                $(document).on('submit', '#them3', function(e) {
                    e.preventDefault();

                    let data = $('#them3').serialize();

                    $.ajax({

                        type: "POST",
                        url: "{{ route('canlamsang.store') }}",
                        data: data,
                        success: function(response) {

                            //console.log(response);
                            if (response.code === 200) {

                                $('#modalcanlamsang').modal('hide');
                                $('#them3')[0].reset();
                                canlamsang();

                                Swal.fire(
                                    'Thêm dữ liệu thành công !'
                                );
                            } else {
                                let mess = '';
                                for (let error of response.error) {
                                    mess += '-' + error + '</br>';
                                }
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal
                                            .stopTimer)
                                        toast.addEventListener('mouseleave', Swal
                                            .resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'error',
                                    html: mess
                                })
                            }
                        }
                    });
                });

                $(document).on('submit', '#them2', function(e) {
                    e.preventDefault();

                    let data = $('#them2').serialize();
                    //console.log(data);

                    $.ajax({

                        type: "POST",
                        url: "{{ route('doituongmacbenh.store') }}",
                        data: data,
                        success: function(response) {
                            //console.log(response);

                            //console.log(response);
                            if (response.code === 200) {

                                $('#modalthem2').modal('hide');
                                $('#them2')[0].reset();
                                doituongmacbenh();
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
                                $('#them-error1').html(mess);

                            }
                        }
                    });
                });

                $(document).on('submit', '#them1', function(e) {
                    e.preventDefault();

                    let data = $('#them1').serialize();
                    //console.log(data);

                    $.ajax({

                        type: "POST",
                        url: "{{ route('donthuoc.store') }}",
                        data: data,
                        success: function(response) {
                            //console.log(response);

                            //console.log(response);
                            if (response.code === 200) {
                                console.log(response);

                                $('#modalthem1').modal('hide');
                                $('#them1')[0].reset();
                                donthuoc();
                                Swal.fire(
                                    'Thêm dữ liệu thành công !'
                                );
                            } else {
                                let mess = '';
                                for (let error of response.error) {
                                    mess += '-' + error + '</br>';
                                }
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal
                                            .stopTimer)
                                        toast.addEventListener('mouseleave', Swal
                                            .resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'error',
                                    html: mess
                                })

                            }
                        }
                    });
                });
                $(document).on('submit', '#them', function(e) {
                    e.preventDefault();

                    let data = $('#them').serialize();
                    //console.log(data);

                    $.ajax({

                        type: "POST",
                        url: "{{ route('thongtinbenhan.store') }}",
                        data: data,
                        success: function(response) {
                            //console.log(response);

                            //console.log(response);
                            if (response.code === 200) {
                                console.log(response);

                                $('#modalthem').modal('hide');
                                $('#them')[0].reset();
                                thongtinbenhan();
                                Swal.fire(
                                    'Thêm dữ liệu thành công !'
                                );
                            } else {
                                let mess = '';
                                for (let error of response.error) {
                                    mess += '-' + error + '</br>';
                                }
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal
                                            .stopTimer)
                                        toast.addEventListener('mouseleave', Swal
                                            .resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'error',
                                    html: mess
                                })

                            }
                        }
                    });
                });


                $(document).on('submit', '#themtieusubenhan', function(e) {
                    e.preventDefault();

                    let data = $('#themtieusubenhan').serialize();
                    //console.log(data);

                    $.ajax({

                        type: "POST",
                        url: "{{ route('tiensubenhan.store') }}",
                        data: data,
                        success: function(response) {
                            //console.log(response);

                            //console.log(response);
                            if (response.code === 200) {

                                $('#modalthemtiensubenh').modal('hide');
                                $('#themtieusubenhan')[0].reset();
                                tiensubenhan();
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
                                $('#them-errortieusubenhan').html(mess);

                            }
                        }
                    });
                });

                $(document).on('change', '#tinhtt', function(e) {
                    e.preventDefault();

                    var optionSelected = $("option:selected", this);
                    var valueSelected = this.value;

                    $.ajax({
                        type: "get",
                        url: meta + "/Admin/doituongmacbenh/tim/huyen/" + valueSelected,

                        success: function(response) {
                            $('#huyentt').html(response);
                        }
                    });
                })
                $(document).on('change', '#huyentt', function(e) {
                    e.preventDefault();

                    var optionSelected = $("option:selected", this);
                    var valueSelected = this.value;
                    $.ajax({
                        type: "get",
                        url: meta + "/Admin/doituongmacbenh/tim/xa/" + valueSelected,

                        success: function(response) {
                            $('#xatt').html(response);
                        }
                    });
                })
                $(document).on('change', '#tinhnt', function(e) {
                    e.preventDefault();

                    var optionSelected = $("option:selected", this);
                    var valueSelected = this.value;
                    $.ajax({
                        type: "get",
                        url: meta + "/Admin/doituongmacbenh/tim/huyen/" + valueSelected,

                        success: function(response) {
                            $('#huyennt').html(response);
                        }
                    });
                })
                $(document).on('change', '#huyennt', function(e) {
                    e.preventDefault();

                    var optionSelected = $("option:selected", this);
                    var valueSelected = this.value;
                    $.ajax({
                        type: "get",
                        url: meta + "/Admin/thuoc/tim/xa/" + valueSelected,

                        success: function(response) {
                            $('#xant').html(response);
                        }
                    });
                });

                $(document).on('change', '#malankhamtt', function(e) {
                    e.preventDefault();

                    var optionSelected = $("option:selected", this);
                    var valueSelected = this.value;
                    $.ajax({
                        type: "get",
                        url: meta + "/Admin/thongtinbenhan/timdoituong/" + valueSelected,
                        //og(url);
                        success: function(response) {
                            $('#madoituongtt').html(response);
                        }
                    });
                });

                $(document).on('change', '.thuoctt', function(e) {
                    e.preventDefault();

                    var optionSelected = $("option:selected", this);
                    var valueSelected = this.value;
                    $.ajax({
                        type: "get",
                        url: meta + "/Admin/thuoc/tim/dongia/" + valueSelected,

                        success: function(response) {
                            $('.dongiatt').html(response);
                        }
                    });
                })





                $(document).on('click', '.btnsua', function(e) {
                    e.preventDefault();
                    var ID = $(this).attr('href');
                    let url = ID;

                    $.ajax({
                        type: "GET",
                        url: url,

                        success: function(response) {



                            $('#modal-sua .modal-body').html(response);

                            $('#modal-sua').modal('show');


                        }
                    });


                });
                $(document).on('click', '.btnsua', function(e) {
                    e.preventDefault();
                    var MA_BENH_AN = $(this).attr('href');
                    let url = MA_BENH_AN;

                    $.ajax({
                        type: "GET",
                        url: url,

                        success: function(response) {



                            $('#modal-sua .modal-body').html(response);

                            $('#modal-sua').modal('show');


                        }
                    });


                });

                $(document).on('click', '.btnview', function(e) {
                    e.preventDefault();
                    var ID = $(this).attr('href');
                    let url = ID;

                    $.ajax({
                        type: "GET",
                        url: url,

                        success: function(response) {

                            console.log(response);

                            $('#data-view').html(response);
                            $('#modal-view').modal('show');


                        }
                    });


                });

                $(document).on('submit', '#sua', function(e) {
                    e.preventDefault();
                    let action = $(this).attr('action');
                    let data = $('#sua').serialize(); //lấy dữ liệu trên from
                    //console.log(data);
                    $.ajax({
                        type: "POST",
                        url: action,
                        data: data,

                        success: function(response) {

                            if (response.code === 200) {

                                Swal.fire(
                                    'Cập nhật dữ liệu thành công !'
                                );
                                $('#sua')[0].reset();
                                $('#modal-sua').modal('hide');
                                doituongmacbenh();
                            } else {
                                let mess = '';

                                for (let error of response.error) {
                                    mess += '<li>';
                                    mess +=
                                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                    mess += '<strong>' + error + '';
                                    mess +=
                                        ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                    mess += ' </div>';
                                    mess += '</li>';
                                }
                                $('#sua-error').html(mess);

                            }
                        }
                    });



                });
                $(document).on('submit', '#sua', function(e) {
                    e.preventDefault();
                    let action = $(this).attr('action');
                    let data = $('#sua').serialize(); //lấy dữ liệu trên from
                    //console.log(data);
                    $.ajax({
                        type: "POST",
                        url: action,
                        data: data,

                        success: function(response) {

                            if (response.code === 200) {

                                Swal.fire(
                                    'Cập nhật dữ liệu thành công !'
                                );
                                $('#sua')[0].reset();
                                $('#modal-sua').modal('hide');
                                thongtinbenhan();
                            } else {
                                let mess = '';
                                for (let error of response.error) {
                                    mess += '-' + error + '</br>';
                                }
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal
                                            .stopTimer)
                                        toast.addEventListener('mouseleave', Swal
                                            .resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'error',
                                    html: mess
                                })

                            }
                        }
                    });



                });

                $(document).on('submit', '#sua', function(e) {
                    e.preventDefault();
                    let action = $(this).attr('action');
                    let data = $('#sua').serialize(); //lấy dữ liệu trên from
                    //console.log(data);
                    $.ajax({
                        type: "POST",
                        url: action,
                        data: data,

                        success: function(response) {

                            if (response.code === 200) {

                                Swal.fire(
                                    'Cập nhật dữ liệu thành công !'
                                );
                                $('#sua')[0].reset();
                                $('#modal-sua1').modal('hide');
                                tieusubenhtat();
                            } else {
                                let mess = '';

                                for (let error of response.error) {
                                    mess += '<li>';
                                    mess +=
                                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                    mess += '<strong>' + error + '';
                                    mess +=
                                        ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                    mess += ' </div>';
                                    mess += '</li>';
                                }
                                $('#sua-error1').html(mess);

                            }
                        }
                    });



                });
                let sl = 0;
                $(document).on('click', '#themthuoc', function(e) {
                    e.preventDefault();
                    sl += $('#sl').val();
                    if (sl >= 1 && sl > 20) {
                        alert(sl);
                    } else {
                        let meta = "{{ url('') }}";
                        let url = meta + "/Admin/thuoc/chonthuoc/" + sl;

                        $.ajax({
                            type: "get",
                            url: url,
                            success: function(response) {
                                $('#them-thuoc').html(response);
                                chonthuoc(sl);
                            }
                        });
                    }
                    //console.log(sl);





                });




                function chonthuoc(sl1) {
                    for (let index = 1; index <= sl1; index++) {
                        $(document).on('change', '.thuoctt-' + index, function(e) {
                            e.preventDefault();
                            var optionSelected = $("option:selected", this);
                            var valueSelected = this.value;
                            $.ajax({
                                type: "get",
                                url: meta + "/Admin/thuoc/tim/thuoc/" + valueSelected,

                                success: function(response) {
                                    $('.lieudungtt-' + index).val(response.LIEU_DUNG);
                                    $('.dongiatt-' + index).val(response.DON_GIA);
                                }
                            });
                        });
                    }
                }
                
                $(document).on('click', '.btnxoa', function(e) {
                e.preventDefault();
                var MA_BENH_AN = $(this).attr('href');
                Swal.fire({
                    title: 'Bạn có chắc ',
                    text: "Mọi hành động của bạn sẽ không được thay đỗi ",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = MA_BENH_AN;
                        let token = "{{ csrf_token() }}";
                        let method = "DELETE";
                        let data = {
                            _method: method,
                            _token: token,
                        }
                        $.post(url, data, function(res) {
                            if (res.code === 200) {

                                thongtinbenhan();
                                Swal.fire(
                                    'Xóa dữ liệu thành công !'
                                );
                            }
                        })

                    }
                })
            });





            });
        </script>
    @stop
