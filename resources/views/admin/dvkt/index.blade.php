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
                                <th scope="col">Mã đơn vị kĩ thuật</th>
                                <th scope="col">Tên đơn vị kĩ thuật</th>
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
        <div class="modal-dialog">
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
                            <label for="">Mã đơn vị kĩ thuật</label>
                            <input type="text" name="MA_DVKT" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tên đơn vị kĩ thuật</label>
                            <input type="text" name="TEN_DVKT" class="form-control">
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
        dvkt();

        function dvkt() {
            $.ajax({
                type: "GET",
                url: "{{ route('dvkt.loaddata') }}",
                success: function(response) {
                    //console.log(response);
                    let html = '';
                    response.forEach(item => {
                        html += ' <tr>';
                        html += ' <th scope="row">' + item.MA_DVKT + '</th>';
                        html += ' <td>' + item.TEN_DVKT + '</td>';
                        html += '<td><button value="' + item.MA_DVKT +
                            '" type="button" class="btn btn-warning btnsua"><i class="ri-edit-line"></i></button></td>';
                        html += '<td><a value="' + item.MA_DVKT +
                            '" type="button" class="btn btn-danger btnxoa"><i class="ri-delete-bin-line"></i></button></td>';
                        html += ' </tr>';
                    });
                    $('#data').html(html);

                }
            });
        }
    });
</script>
@stop