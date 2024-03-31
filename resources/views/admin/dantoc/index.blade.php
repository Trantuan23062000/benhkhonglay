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
                                
                                    <button type="button" class="btn btn-success float-end" data-bs-toggle="modal"
                                        data-bs-target="#modalexcel"><i class="ri-add-fill"></i> Nhập excel</button>
                                
                        </h4>
                        
                    </div>

                    <div id="success_message"></div>
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã dân tộc</th>
                                <th scope="col">Tên dân tộc </th>

                            </tr>
                        </thead>
                        <tbody id="data">



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalexcel" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nhập excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Chọn file cần nhập dữ liệu</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                      <button type="submit" class="btn btn-primary">Submit</button>

                </div>


            </div>
        </div>
    </div>


    <div class="modal fade" id="modalthem" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm dữ liệu sở y tế</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <ul id="them-error"></ul>
                    <form id="them" action="" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Mã dân tộc</label>
                            <input type="text" name="MA_DAN_TOC" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tên dân tộc</label>
                            <input type="text" name="TEN_DAN_TOC" class="form-control">
                        </div>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                        <button type="submit" class="btn btn-primary">Tải lên</button>
                    </form>

                </div>


            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-sua" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
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
        $(document).ready(function() {
            let meta = "{{ url('') }}";
            dantoc();
            $(document).on('submit', '#them', function(e) {
                e.preventDefault();

                let data = $('#them').serialize();
                let token = "{{ csrf_token() }}";



                $.ajax({

                    type: "POST",
                    url: "{{ route('dantoc.store') }}",
                    data: data,
                    success: function(response) {

                        //console.log(response);
                        if (response.code === 200) {

                            $('#modalthem').modal('hide');
                            $('#them')[0].reset();
                            dantoc();

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
            function dantoc() {
            $.ajax({
                type: "GET",
                url: "{{ route('dantoc.loaddata') }}",
                success: function(response) {
                    //console.log(response);
                    let html = '';
                    response.forEach(item => {
                        html += ' <tr>';
                        html += ' <th scope="row">' + item.MA_DAN_TOC + '</th>';
                        html += ' <td>' + item.TEN_DAN_TOC + '</td>';
                        html += '<td><button value="' + item.MA_DAN_TOC +
                            '" type="button" class="btn btn-warning btnsua"><i class="ri-edit-line"></i></button></td>';
                        html += '<td><a value="' + item.MA_DAN_TOC +
                            '" type="button" class="btn btn-danger btnxoa"><i class="ri-delete-bin-line"></i></button></td>';
                        html += ' </tr>';
                    });
                    $('#data').html(html);

                }
            });
            $(document).on('click', '.btnsua', function(e) {
                e.preventDefault();
                var MA_DAN_TOC = $(this).val();
                //console.log(meta);


                let url = meta + "/Admin/dantoc/edit/" + MA_DAN_TOC;

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
                            dantoc();
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
            $(document).on('click', '.btnxoa', function() {
                var MA_DAN_TOC = $(this).attr('value');
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
                        let url = meta + "/Admin/dantoc/" + MA_DAN_TOC;
                        let token = "{{ csrf_token() }}";
                        let method = "DELETE";
                        let data = {
                            _method: method,
                            _token: token,
                        }
                        $.post(url, data, function(res) {
                            if (res.code === 200) {

                                dantoc();
                                Swal.fire(
                                    'Xóa dữ liệu thành công !'
                                );
                            }
                        })

                    }
                })
            });

        }

        });
    </script>
@stop
