<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin - Đăng ký</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="admin/img/logo/logo.png" rel="icon">
    <link rel="stylesheet" href="{{ URL::asset('admin/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/css/ruang-admin.min.css') }}">
    <base href="{{asset('')}}">
</head>

<body class="bg-gradient-login">
    <!-- Register Content -->
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng ký</h1>
                                    </div>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if (session('register'))
                                    <div class="alert alert-success">
                                        {{ session('register') }}
                                    </div>
                                    @endif
                                    @if (session('errorregister'))
                                    <div class="alert alert-danger">
                                        {{ session('errorregister') }}
                                    </div>
                                    @endif
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Tên tài khoản</label>
                                            <input type="text" class="form-control" name="name" placeholder="Hãy nhập tên tài khoản">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Hãy nhập email">
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu</label>
                                            <input type="password" class="form-control" name="password" placeholder="Hãy nhập mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập lại mật khẩu</label>
                                            <input type="password" class="form-control" name="repassword" placeholder="Hãy nhập lại mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                                        </div>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-block">
                                            <i class="fab fa-google fa-fw"></i> Đăng ký với Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Đăng ký với Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="font-weight-bold small" href="{{ route('login') }}">Bạn đã có tài khoản?</a>
                                    </div>
                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content -->
    <script src="{{ URL::asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('admin/js/ruang-admin.min.js') }}"></script>
</body>

</html>