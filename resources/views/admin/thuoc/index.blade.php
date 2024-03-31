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

                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã thuốc</th>
                                <th scope="col">Tên thuốc</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Đơn giá</th>
                                <th scope="col">Mức hưởng</th>
                                <th scope="col">Thành tiền</th>
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
                    <h5 class="modal-title">Thêm dữ liệu đơn thuốc</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <ul id="them-error"></ul>
                    <form id="them" action="" method="POST">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <label for="">Mã thuốc </label>
                                <input type="text" name="MA_THUOC" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <label for="">Mã nhóm</label>
                                <select id="" class="form-control custom-select" name="MA_NHOM" autofocus>
                                    <option value="1">Thuốc trong danh mục BHYT</option>
                                    <option value="2">Thuốc ngoài danh mục BHYT</option>
                                    <option value="3">Thuốc thanh toán theo tỷ lệ</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label for="">Tên thuốc</label>
                                <input type="text" name="TEN_THUOC" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <label for="">Đơn vị tính</label>
                                <select id="" class="form-control custom-select" name="DON_VI_TINH" autofocus>
                                    <option value="1">Ml</option>
                                    <option value="0">Ui</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <label for="">Hàm lượng</label>
                                <input type="text" name="HAM_LUONG" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <label for="">Đường dùng</label>
                                <input type="text" name="DUONG_DUNG" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <label for="">Liều dùng</label>
                                <select id="" class="form-control custom-select" name="LIEU_DUNG" autofocus>
                                    <option value="1 viên ngày">1 viên/ngày</option>
                                    <option value="2 viên ngày">2 viên/ngày</option>
                                    <option value="3 viên ngày">3 viên/ngày</option>
                                    <option value="4 viên ngày">4 viên/ngày</option>
                                    <option value="5 viên ngày">5 viên/ngày</option>
                                    <option value="6 viên ngày">6 viên/ngày</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label for="">Số đăng ký</label>
                                <input type="text" name="SO_DANG_KY" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="">Thông tin thầu</label>
                                <input type="text" name="TT_THAU" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Phạm vi</label>
                                <select id="" class="form-control custom-select" name="PHAM_VI" autofocus>
                                    <option value="1">Trong bảo hiểm y tế</option>
                                    <option value="2">Ngoài bảo hiểm y tế</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Số lượng</label>
                                <input type="text" name="SO_LUONG" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Đơn giá</label>
                                <input type="text" name="DON_GIA" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Mức hưởng</label>
                                <select id="" class="form-control custom-select" name="MUC_HUONG" autofocus>
                                    <option value="0">Không có mức hường</option>
                                    <option value="5">Trái tuyến hổ trợ 5%</option>
                                    <option value="10">Trái tuyến hổ trợ 10%</option>
                                    <option value="20">Trái tuyến hổ trợ 20%</option>
                                    <option value="30">Trái tuyến hổ trợ 30%</option>
                                    <option value="40">Trái tuyến hổ trợ 40 %</option>
                                    <option value="50">Đúng tuyến 50%</option>
                                    <option value="60">Đúng tuyến 60%</option>
                                    <option value="70">Đúng tuyến 70%</option>
                                    <option value="80">Đúng tuyến 80%</option>
                                    <option value="90">Đúng tuyến 90%</option>
                                    <option value="95">Đúng tuyến 95%</option>
                                    <option value="100">Đúng tuyến 100%</option>
                                </select>
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

    <div class="modal fade" id="modal-sua" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cập nhật dữ liệu</h5>
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
        thuoc();

        function thuoc() {
            $.get("{{ route('thuoc.data') }}", function(res) {
                $('#data').html(res);

            })
        };
        $(document).ready(function() {
            let meta = "{{ url('') }}";
            thuoc();
            $(document).on('submit', '#them', function(e) {
                e.preventDefault();

                let data = $('#them').serialize();
                let token = "{{ csrf_token() }}";



                $.ajax({

                    type: "POST",
                    url: "{{ route('thuoc.store') }}",
                    data: data,
                    success: function(response) {

                        //console.log(response);
                        if (response.code === 200) {

                            $('#modalthem').modal('hide');
                            $('#them')[0].reset();
                            thuoc();

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
            $(document).on('click', '.btnxoa', function(e) {
                e.preventDefault();
                var MA_THUOC = $(this).attr('href');
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
                        let url = MA_THUOC;
                        let token = "{{ csrf_token() }}";
                        let method = "DELETE";
                        let data = {
                            _method: method,
                            _token: token,
                        }
                        $.post(url, data, function(res) {
                            if (res.code === 200) {

                                thuoc();
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
                var MA_THUOC = $(this).attr('href');
                let url = MA_THUOC;

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
                //console.log(data);
                $.ajax({
                    type: "POST",
                    url: action,
                    data: data,

                    success: function(response) {
                        console.log(response);
                        if (response.code === 200) {
                            

                            Swal.fire(
                                'Cập nhật dữ liệu thành công !'
                            );
                            $('#sua')[0].reset();
                            $('#modal-sua').modal('hide');
                            thuoc();
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



        });
    </script>
@stop
