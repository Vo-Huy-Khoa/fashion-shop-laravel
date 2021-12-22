@extends('layout.index')
@section('title')
    Register
@endsection
@section('content')
@if (!Auth::check())
<style>
    .gradient-custom-3 {
  /* fallback for old browsers */
  background: #84fab0;
  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
  /* fallback for old browsers */
  background: #84fab0;
  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
</style>
<section class="vh-80 bg-image" >
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-8 col-xl-8">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
                @endif
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                <form action="{{route('user-register')}}" method="POST">
                    @csrf
                  <div class="form-outline mb-4">
                    <input type="text"  name="name" class="form-control form-control-lg" />
                    <label class="form-label" for="name">User Name</label>
                  </div>
                  <div class="form-outline ">
                    <input type="text"  name="first_name" class="form-control form-control-lg" />
                    <label class="form-label" for="name">First Name</label>
                  </div>
                  <div class="form-outline">
                    <input type="text"  name="last_name" class="form-control form-control-lg" />
                    <label class="form-label" for="name">Last Name</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email"  name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email"> Email</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password"  name="password" id="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="form-outline mb-4">
                    <span id='message'></span>
                    <input type="password"  name="confirm_password" id="confirm_password" class="form-control form-control-lg" />
                    <label class="form-label" for="confirm_password">Repeat your password</label>
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>
                  <p class="text-center text-muted mt-5 mb-0">Have already an account?
                    <a href="{{route('user-login')}}" class="fw-bold text-body">
                      <u>Login here</u>
                    </a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>
@endsection