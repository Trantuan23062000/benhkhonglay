@extends('layout.admin')
@section('content')
    {{-- loaddulieu --}}
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">



                <div class="card">
                    <div class="card-header">
                        <h4>
                            Dữ liệu trung tâm y tế

                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#modalthem"><i class="ri-add-fill"></i> Thêm mới dữ liệu</button>
                                <button type="button" class="btn btn-success float-end" data-bs-toggle="modal"
                                data-bs-target="#exportexcel"><i class="ri-add-fill"></i> Import excel</button>

                        </h4>
                    </div>

                    <div id="success_message"></div>

                    <table class="table" id="table">

                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên sở y tế</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Số điện thoại liên lạc</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mã cơ sơ y tế</th>
                            </tr>
                        </thead>
                        <tbody id="data">



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    {{-- edit --}}
    <div class="modal fade" id="modal-sua" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit_ID">Cập nhật dữ liệu</h5>
                    <button type="hi" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">



                    <div id="sua-error"></div>
                    <div id="data-sua"></div>

                </div>


            </div>
        </div>
    </div>

    <div class="modal fade" id="exportexcel" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Emport dữ liệu trung tâm y tế</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ttyte.nhap') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Import file</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                        <button type="submit" class="btn btn-primary">Tải lên</button>
                    </form>



                </div>


            </div>
        </div>
    </div>

    {{-- Them du lieu --}}
    <div class="modal fade" id="modalthem" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm dữ liệu sở y tế</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <ul id="them-error"></ul>
                    <form id="them" action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Tên trung tâm y tế</label>
                                <input type="text" name="TEN_TRUNG_TAM_Y_TE" class="TEN_TRUNG_TAM_Y_TE form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Địa chỉ</label>
                                <input type="text" name="DIA_CHI" class="DIA_CHI form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Số điện thoại</label>
                                <input type="text" name="SDT" class="SDT form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="text" name="EMAIL" class="EMAIL form-control">
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label for="">Sở y tế</label>
                                <select id="SO_Y_TE_ID"
                                    class="form-control custom-select @error('SO_Y_TE_ID') is-invalid @enderror"
                                    name="SO_Y_TE_ID" required autofocus>
                                    <option value="">-- Sở y tế --</option>
                                    @foreach ($soyte as $value)
                                        <option value="{{ $value->ID }}">{{ $value->TEN_SO_Y_TE }}</option>
                                    @endforeach
                                </select>
                                @error('SO_Y_TE_ID')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
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
            ttyte();

            function ttyte() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('ttyte.loaddata') }}",
                    success: function(response) {
                        console.log(response);
                        let html = '';
                        response.forEach(item => {
                            html += ' <tr>';
                            html += ' <th scope="row">' + item.ID + '</th>';
                            html += ' <td>' + item.TEN_TRUNG_TAM_Y_TE + '</td>';
                            html += ' <td>' + item.DIA_CHI + '</td>';
                            html += ' <td>' + item.SDT + '</td>';
                            html += ' <td>' + item.EMAIL + '</td>';
                            html += ' <td>' + item.SO_Y_TE_ID + '</td>';
                            html += '<td><button value="' + item.ID +
                                '" type="button" class="btn btn-warning btnsua"><i class="ri-edit-line"></i></button></td>';
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



                $.ajax({

                    type: "POST",
                    url: "{{ route('ttyte.store') }}",
                    data: data,
                    success: function(response) {


                        if (response.code === 200) {

                            $('#modalthem').modal('hide');
                            $('#them')[0].reset();
                            ttyte();
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
            $(document).on('click', '.btnsua', function(e) {
                e.preventDefault();
                var ID = $(this).val();
                //console.log(meta);


                let url = meta + "/Admin/ttyte/edit/" + ID;

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
                            ttyte();
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
                var ID = $(this).attr('value');
                Swal.fire({
                    title: 'Bạn có chắc?',
                    text: "Đều bạn làm sẽ không rút lại được!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    if (result.isConfirmed) {
                        let url = meta + "/Admin/ttyte/" + ID;
                        let token = "{{ csrf_token() }}";
                        let method = "DELETE";
                        let data = {
                            _method: method,
                            _token: token,
                        }
                        $.post(url, data, function(res) {
                            if (res.code === 200) {

                                ttyte();
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
