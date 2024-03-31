<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('public/admin') }}/img/login.jpg" rel="icon">
    <link href="{{ url('public/admin') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('public/admin') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public/admin') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('public/admin') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ url('public/admin') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ url('public/admin') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ url('public/admin') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ url('public/admin') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="{{ url('public/admin') }}/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">

                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Đăng nhập hệ thống</h5>
                                    </div>

                                    <form id="login" action="{{ route('Admin.postlogin') }}" method="post"
                                        class="row g-3 needs-validation" novalidate>
                                        @csrf
                                        <ul id="thongbaoloi"  style="width:400px;text-align: center;color:red;"></ul>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Tên đăng nhập:</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="TEN_DANG_NHAP" class="form-control"
                                                    id="TEN_DANG_NHAP" required placeholder="Vui lòng nhập tên đăng nhập... ">
                                                <div class="invalid-feedback" >Vui lòng nhập tên đăng nhập</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password:</label>
                                            <input type="password" name="PASSWORD" class="form-control" id="password"
                                                required placeholder="Vui lòng nhập mật khẩu... ">
                                            <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" id="btn-login"
                                                type="submit">Đăng nhập</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Bạn chưa có tài khoản? <a
                                                    href="pages-register.html">Tạo tài khoản mới</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('public/admin') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/chart.js/chart.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('public/admin') }}/assets/js/main.js"></script>
    {{-- <script src="{{ url('public/admin') }}/assets/js/script.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
<script>
    $('#login').submit(function(e) {
        e.preventDefault();
        let data = $(this).serialize();
        var url = "{{ route('Admin.postlogin') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function(response) {
                if (response.code == 200) {
                    $('#thongbaoloi').html('');
                    const Msg = Swal.mixin({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Đăng nhập thành công',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    //end
                    Msg.fire({

                        type: 'success',
                        title: 'Đăng nhập thành công',

                    });

                    window.location.replace("{{ route('Admin.index') }}");

                } else {
                    let mess = '';
                    mess+=response.error;
                    $('#thongbaoloi').html(mess);



                }
            }
        });

    });
</script>
