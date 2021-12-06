<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="admin_asset/img/logo/logo.png" rel="icon">
  
  
  <link rel="stylesheet" href="{{ URL::asset('admin_asset/vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('admin_asset/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('admin_asset/css/ruang-admin.min.css') }}">
  <base href="{{asset('')}}">
</head>
<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
             
                  @if (session('login'))
                  <div class="alert alert-success">
                      {{ session('login') }}
                  </div>
              @endif
              @if (session('register'))
              <div class="alert alert-success">
                  {{ session('register') }}
              </div>
          @endif
                  @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif
              @if (session('logout'))
              <div class="alert alert-success">
                  {{ session('logout') }}
              </div>
          @endif
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Login</h1>
          </div>
                  <form class="user" action="{{ route('login') }}" method="POST" >
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                        placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    {{-- <div class="form-group">
                        <input  type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                        
                        <label  class="custom-control-label" for="customCheck">Remember
                          Me</label>
                     
                    </div> --}}
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <hr>
                    <a href="admin/login/google" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="admin/login/facebook" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="{{route('register')}}">Create an Account!</a>
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
   <script src="{{ URL::asset('admin_asset/vendor/jquery/jquery.min.js') }}"></script>
   <script src="{{ URL::asset('admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ URL::asset('admin_asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
   <script src="{{ URL::asset('admin_asset/js/ruang-admin.min.js') }}"></script>
</body>
</html>