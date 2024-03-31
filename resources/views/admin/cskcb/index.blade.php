@extends('layout.admin')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">



            <div class="card">
                <div class="card-header">
                    <h4>
                        Dữ liệu cơ sở khám chữa bệnh
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#modalthem"><i class="ri-add-fill"></i> Thêm mới dữ liệu</button>
                    </h4>
                </div>

                <div id="success_message"></div>
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã CSKCB</th>
                            <th scope="col">Tên CSKCB</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">SDT</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">View</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data">



                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-sua" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_ID">Cập nhật dữ liệu</h5>
                <button type="hi" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 
                <ul id="sua-error"></ul>

                <div id="data-sua"></div>

            </div>


        </div>
    </div>
</div>

<div class="modal fade" id="modal-xem" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_ID">Xem chi tiết cơ sở khám chữa bệnh</h5>
                <button type="hide" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="data-xem"></div>

            </div>


        </div>
    </div>
</div>

<div class="modal fade" id="modalthem" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Thêm dữ liệu cơ sở khám chữa bệnh</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="them-error"></ul>
                <form id="them" action="" method="POST">
                    @csrf
                    <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="">Mã cơ sở khám chữa bệnh</label>
                        <input type="text" name="MCSKCB" class="MCSKCB form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Tên cơ sở khám chữa bệnh  </label>
                        <input type="text" name="TEN_CSKCB" class="TEN_CSKCB form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Địa chỉ</label>
                        <input type="text" name="DIACHI" class="DIACHI form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Số điện thoại</label>
                        <input type="number" name="SDT" class="SDT form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Email</label>
                        <input type="text" name="EMAIL" class="form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" name="TEN_DANG_NHAP" class="form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Password</label>
                        <input type="password" name="PASSWORD" class="EMAIL form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="IMAGE" class="EMAIL form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Sở y tế</label>
                        <select id="soyte" class="form-control custom-select" name="soyte_id"
                            autofocus>
                            <option value="">Sở y tế</option>
                            @foreach ($soyte as $item)
                                <option value="{{ $item->ID }}">{{ $item->TEN_SO_Y_TE }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Trung tâm y tế</label>
                        <select id="ttyte" class="form-control custom-select" name="ttyte_id" 
                            autofocus>
                            <option value="">Sở y tế</option>
                            @foreach ($ttyte as $item)
                                <option value="{{ $item->ID }}">{{ $item->TEN_TRUNG_TAM_Y_TE }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Trạm y tế</label>
                        <select id="tramyte" class="form-control custom-select" name="tramyte_id" 
                            autofocus>
                            <option value="">Sở y tế</option>
                            @foreach ($tramyte as $item)
                                <option value="{{ $item->ID }}">{{ $item->TEN_TRAM_Y_TE }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Quyền hạn</label>
                        <select id="QUYEN_ID" class="form-control custom-select" name="QUYEN_ID" required
                            autofocus>
                            <option value="">Chọn quyền hạn</option>
                            @foreach ($quyen as $item)
                                <option value="{{ $item->ID }}">{{ $item->TEN_QUYEN }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" btn-lg class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                        <button type="submit" btn-lg class="btn btn-primary">Tải lên</button>
                    </div>
                   
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
        cskcb();

        function cskcb() {
            $.ajax({
                type: "GET",
                url: "{{ route('cskcb.loaddata') }}",
                success: function(response) {
                    //console.log(response);
                    let html = '';
                    response.forEach(item => {
                        html += ' <tr>';
                        html += ' <th scope="row">' + item.MCSKCB + '</th>';
                        html += ' <td>' + item.TEN_CSKCB + '</td>';
                        html += ' <td>' + item.DIACHI + '</td>';
                        html += ' <td>' + item.SDT + '</td>';
                        html += ' <td>' + item.EMAIL + '</td>';
                        html += '<td><a value="' + item.MCSKCB +
                            '" type="button" class="btn btn-info btnview"><i class="ri-record-circle-line"></i></button></td>';
                        html += '<td><button value="' + item.MCSKCB +
                            '" type="button" class="btn btn-warning btnsua"><i class="ri-edit-line"></i></button></td>';
                        html += '<td><a value="' + item.MCSKCB +
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
                console.log(data);



                $.ajax({

                    type: "POST",
                    url: "{{ route('cskcb.store') }}",
                    data: data,
                    
                    success: function(response) {

                        console.log(response);
                        if (response.code === 200) {

                            $('#modalthem').modal('hide');
                            $('#them')[0].reset();
                            cskcb();

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
                var MCSKCB = $(this).attr('value');
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
                        let url = meta + "/Admin/cskcb/" + MCSKCB;
                        let token = "{{ csrf_token() }}";
                        let method = "DELETE";
                        let data = {
                            _method: method,
                            _token: token,
                        }
                        $.post(url, data, function(res) {
                            if (res.code === 200) {

                                cskcb();
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
                var MCSKCB = $(this).val();
                //console.log(meta);


                let url = meta + "/Admin/cskcb/edit/" + MCSKCB;

                $.ajax({
                    type: "GET",
                    url: url,

                    success: function(response) {



                        $('#data-sua').html(response);
                        $('#modal-sua').modal('show');


                    }
                });


            });
            $(document).on('click', '.btnview', function(e) {
                e.preventDefault();
                var MCSKCB = $(this).val();
                //console.log(meta);

                let url = meta + "/Admin/cskcb/view/" + MCSKCB;

                $.ajax({
                    type: "GET",
                    url: url,

                    success: function(response) {
                        //console.log(response);



                        $('#data-xem').html(response);
                        $('#modal-xem').modal('show');


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
                            cskcb();
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
            $(document).on('change', '#soyte', function(e) {
                e.preventDefault();

                var optionSelected = $("option:selected", this);
                var valueSelected = this.value;
                
                $.ajax({
                    type: "get",
                    url: meta + "/Admin/cskcb/tim/ttyte/" + valueSelected,

                    success: function(response) {
                        $('#ttyte').html(response);
                    }
                });
            })
            $(document).on('change', '#ttyte', function(e) {
                e.preventDefault();

                var optionSelected = $("option:selected", this);
                var valueSelected = this.value;
                
                $.ajax({
                    type: "get",
                    url: meta + "/Admin/cskcb/tim/tramyte/" + valueSelected,

                    success: function(response) {
                        $('#tramyte').html(response);
                    }
                });
            })

    });
</script>
@stop