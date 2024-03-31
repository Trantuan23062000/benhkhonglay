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
                                <th scope="col">STT</th>
                                <th scope="col">Tin tức</th>
                                <th scope="col">Trạng thái</th>
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
                    <h5 class="modal-title">Thêm tin tức</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <ul id="them-error"></ul>
                    <form id="them" action="{{ route('tintuc.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tên tin tức</label>
                            <textarea class="form-control" name="TEN_TIN_TUC"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tin tức</label>
                            <textarea class="form-control ckeditor" name="TIN_THUONG"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ảnh:</label>
                            <input name="IMAGE" type="file" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Trạng thái</label>
                            <select id="" class="form-control custom-select" name="TRANG_THAI" autofocus>
                                <option>Chọn trạng thái hiển thị</option>
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>
                            </select>
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
        tintuc();

        function tintuc() {
            $.get("{{ route('tintuc.data') }}", function(res) {
                $('#data').html(res);

            })
        };
        $('#them').on('submit', function(e) {
            e.preventDefault();
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }
            let url = $(this).attr('action');
            let data = new FormData(this);
            $.ajax({
                type: "POST",
                url: url,
                data: data,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    if (response.code == 200) {
                        $('#them')[0].reset();
                       
                        $('#them').modal('hide');
                        Swal.fire(
                                'Thêm dữ liệu thành công !'
                            );
                            tintuc();
                    } else {
                        let _html = '';
                        for (let error of response.error) {
                            _html += '-' + error + '</br>';
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            html: _html,
                            showConfirmButton: false,
                            toast: true,
                            timer: 5000,
                        });
                    }

                }
            });




        });
    </script>
@stop
