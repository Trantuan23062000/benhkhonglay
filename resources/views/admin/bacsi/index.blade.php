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
                                <th scope="col">Mã bác sĩ</th>
                                <th scope="col">Tên bác sĩ</th>
                                <th scope="col">Chức danh</th>
                                <th scope="col">Tên khoa</th>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm dữ liệu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <ul id="them-error"></ul>
                    <form id="them" action="" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Mã bác sĩ</label>
                            <input type="text" name="MABS" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tên bác sĩ</label>
                            <input type="text" name="TEN_BS" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chức danh</label>
                            <input type="text" name="CHUC_DANH" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tên khoa</label>
                            <input type="text" name="TEN_KHOA" class="form-control">
                        </div>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                        <button type="submit" class="btn btn-primary">Tải lên</button>
                    </form>

                </div>


            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-sua" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
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
        bacsi();

        function bacsi() {
            $.get("{{ route('bacsi.data') }}", function(res) {
                $('#data').html(res);

            })
        };
        $(document).ready(function() {
            let meta = "{{ url('') }}";
            bacsi();
            $(document).on('submit', '#them', function(e) {
                e.preventDefault();

                let data = $('#them').serialize();
                let token = "{{ csrf_token() }}";



                $.ajax({

                    type: "POST",
                    url: "{{ route('bacsi.store') }}",
                    data: data,
                    success: function(response) {

                        //console.log(response);
                        if (response.code === 200) {

                            $('#modalthem').modal('hide');
                            $('#them')[0].reset();
                            bacsi();

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
            $(document).on('click', '.btnxoa', function(e) {
                e.preventDefault();
                var MABS = $(this).attr('href');
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
                        let url = MABS;
                        let token = "{{ csrf_token() }}";
                        let method = "DELETE";
                        let data = {
                            _method: method,
                            _token: token,
                        }
                        $.post(url, data, function(res) {
                            if (res.code === 200) {

                                bacsi();
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
                var MABS = $(this).attr('href');
                let url = MABS;

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

                        if (response.code === 200) {

                            Swal.fire(
                                'Cập nhật dữ liệu thành công !'
                            );
                            $('#sua')[0].reset();
                            $('#modal-sua').modal('hide');
                            bacsi();
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



        });
    </script>
@stop
