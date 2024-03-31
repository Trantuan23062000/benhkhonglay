@extends('layout.admin')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">



                <div class="card">
                    <div class="card-header">
                        <h4>
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#modalthem"><i class="ri-add-fill"></i> Thêm mới dữ liệu</button>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="search" required>
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
                                <th scope="col">Giới tính</th>
                                <th scope="col">Ngày sinh</th>
                                <th scope="col">SDT</th>
                                <th scope="col">Mã nghề nghiệp</th>
                                <th scope="col">Mã dân tộc</th>
                                <th scope="col">CMND</th>
                                <th scope="col">Mã tĩnh hộ khẩu</th>
                                <th scope="col">Mã hyện hộ khẩu</th>
                                <th scope="col">Mã xã hộ khẩu</th>
                                <th scope="col">Địa chỉ hộ khẩu</th>
                                <th scope="col">Mã tĩnh tạm trú</th>
                                <th scope="col">Mã huyện tạm trú</th>
                                <th scope="col">Mã xã tạm trú</th>
                                <th scope="col">Địa chỉ tạm trú</th>
                                <th scope="col">E|D</th>
                            </tr>
                        </thead>
                        <tbody id="data">



                        </tbody>
                    </table>
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
    <div class="modal fade" id="modalthem" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl   ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Thêm đối tượng mắc bệnh</h5>
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
                                <label for="inputText" class="">Mã đối tượng</label>
                                <div class="">
                                    <input type="text" required class="form-control" name="MA_DOI_TUONG">
                                </div>
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
                                <select id="huyennt" class="form-control custom-select" required name="MA_HUYEN_HO_KHAU"
                                    required autofocus>
                                    <option value="">Mã huyện</option>
                                    @foreach ($huyen as $item)
                                        <option value="{{ $item->MA_HUYEN }}">{{ $item->TEN_HUYEN }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label for="">Xã hộ khẩu</label>
                                <select id="xant" class="form-control custom-select" required name="MA_XA_HO_KHAU" required
                                    autofocus>
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
                                <select id="huyentt" class="form-control custom-select" required name="MA_HUYEN_TAM_TRU"
                                    autofocus>
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
                            <div class="col-sm-3 mb-4">
                                <label for="inputText" class="">Địa chỉ tạm trú chi tiết</label>
                                <div class="">
                                    <input type="text" required class="form-control" name="TAM_TRU_DIA_CHI">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                        <button type="submit" class="btn btn-primary">Tải lên</button>
                    </form>


                </div>


            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        $(document).ready(function() {
            let meta = "{{ url('') }}";
            doituongmacbenh();

            function doituongmacbenh() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('doituongmacbenh.loaddata') }}",
                    success: function(response) {
                        //console.log(response);
                        let html = '';
                        response.forEach(item => {
                            console.log(item.doituong);
                            html += ' <tr>';
                            html += ' <th scope="row">' + item.MA_DINH_DANH_V20 + '</th>';
                            html += ' <td>' + item.MA_DOI_TUONG + '</td>';
                            html += ' <td>' + item.HO_TEN + '</td>';
                            html += ' <td>' + item.GIOI_TINH + '</td>';
                            html += ' <td>' + item.NGAY_SINH + '</td>';
                            html += ' <td>' + item.SO_DIEN_THOAI + '</td>';
                            html += ' <td>' + item.MA_NGHE_NGHIEP_ID + '</td>';
                            html += ' <td>' + item.MA_DAN_TOC + '</td>';
                            html += ' <td>' + item.SO_CMND + '</td>';
                            html += ' <td>' + item.MA_TINH_HO_KHAU + '</td>';
                            html += ' <td>' + item.MA_HUYEN_HO_KHAU + '</td>';
                            html += ' <td>' + item.MA_XA_HO_KHAU + '</td>';
                            html += ' <td>' + item.HO_KHAU_DIA_CHI + '</td>';
                            html += ' <td>' + item.MA_TINH_TAM_TRU + '</td>';
                            html += ' <td>' + item.MA_HUYEN_TAM_TRU + '</td>';
                            html += ' <td>' + item.MA_XA_TAM_TRU + '</td>';
                            html += ' <td>' + item.TAM_TRU_DIA_CHI + '</td>';
                            html += '<td><button value="' + item.ID +
                                '" type="button" class="btn btn-warning btnsua "><i class="ri-edit-line"></i></button></td>';
                            html += '<td><a value="' + item.ID +
                                '" type="button" class="btn btn-danger btnxoa"><i class="ri-delete-bin-line"></i></button></td>';
                            html += ' </tr>';
                        });
                        $('#data').html(html);

                    }
                });
            }
            $(document).on('submit', '#them', function(e) {
                e.preventDefault();

                let data = $('#them').serialize();
                let token = "{{ csrf_token() }}";
                //console.log(data);



                $.ajax({

                    type: "POST",
                    url: "{{ route('doituongmacbenh.store') }}",
                    data: data,
                    success: function(response) {

                        //console.log(response);
                        if (response.code === 200) {

                            $('#modalthem').modal('hide');
                            $('#them')[0].reset();
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
                            $('#them-error').html(mess);

                        }
                    }
                });
            });

            $(document).on('click', '.btnxoa', function() {
                var ID = $(this).attr('value');
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
                        let url = meta + "/Admin/doituongmacbenh/" + ID;
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

            $(document).on('click', '.btnsua', function(e) {
                e.preventDefault();
                var ID = $(this).val();
                //console.log(meta);


                let url = meta + "/Admin/doituongmacbenh/edit/" + ID;

                $.ajax({
                    type: "GET",
                    url: url,

                    success: function(response) {



                        $('#data-sua').html(response);
                        $('#modal-sua').modal('show');


                    }
                });


            });
            $(document).on('submit', '#sua', function(e) {
                e.preventDefault();
                let action = $(this).attr('action');
                let data = $('#sua').serialize(); //lấy dữ liệu trên from
                console.log(data);
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
                    url: meta + "/Admin/doituongmacbenh/tim/xa/" + valueSelected,

                    success: function(response) {
                        $('#xant').html(response);
                    }
                });
            })
        });
    </script>
@stop
