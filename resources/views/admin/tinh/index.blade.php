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
                    </div>

                    <div id="success_message"></div>
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã tĩnh</th>
                                <th scope="col">Tên tĩnh</th>
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
    {!! $tinh->links() !!}
@stop
@section('js')
    <script>
        $(document).ready(function() {
            let meta = "{{ url('') }}";
            tinh();

            function tinh(page) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('tinh.loaddata') }}?page=" + page,
                    success: function(response) {
                        //console.log(response);
                        let html = '';
                        for (let item of response.data) {

                            html += ' <tr>';
                            html += ' <th scope="row">' + item.MA_TINH + '</th>';
                            html += ' <td>' + item.TEN_TINH + '</td>';
                            html += '<td><button value="' + item.MA_TINH +
                                '" type="button" class="btn btn-warning btnsua"><i class="ri-edit-line"></i></button></td>';
                            html += '<td><a value="' + item.MA_TINH +
                                '" type="button" class="btn btn-danger btnxoa"><i class="ri-delete-bin-line"></i></button></td>';
                            html += ' </tr>';

                        }
                        $('#data').html(html);

                    }
                });

            };
            $('.pagination a').unbind('click').on('click', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                tinh(page);
            });
            $(document).on('keyup', '#search', function(e) {
                e.preventDefault();
                let data = $(this).val();
                $.ajax({
                    type: "get",
                    url: "{{ route('tinh.loaddata')}}?tukhoa=" + data,

                    success: function(response) {
                        let html='';
                        for (let item of response.data) {
                           
                            html += ' <tr>';
                            html += ' <th scope="row">' + item.MA_TINH + '</th>';
                            html += ' <td>' + item.TEN_TINH + '</td>';
                            html += '<td><button value="' + item.MA_TINH +
                                '" type="button" class="btn btn-warning btnsua"><i class="ri-edit-line"></i></button></td>';
                            html += '<td><a value="' + item.MA_TINH +
                                '" type="button" class="btn btn-danger btnxoa"><i class="ri-delete-bin-line"></i></button></td>';
                            html += ' </tr>';
                        }
                       
                        $('#data').html(html);
                    }
                });
            });
        });
    </script>
@stop
