@extends('admin.index')
@section('title')
    Edit Users
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="wrapper bg-white mt-sm-4">
            <h4 class="pb-4 border-bottom">Account Edit</h4>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('edit'))
                <div class="alert alert-success">
                    {{ session('edit') }}
                </div>
            @endif
            <form action="admin/users/edit/{{$user->id}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row py-2">
                    <!-- Uploaded image area-->
                    <div class="image-area mt-4">
                        <img style="height: 300px; width:300px; boder-radius:50px;" id="imageResult" src="uploads/users/{{$user->image}}" alt=""
                            class="img-fluid rounded shadow-sm mx-auto d-block">
                    </div>
                 </div>
                <div class="row py-2">
                            <!-- Upload image input-->
                     <div class="input-group  rounded-pill bg-white shadow-sm">
                         <input id="upload" name="img" type="file" value="{{$user->image}}" onchange="readURL(this);" class="form-control border-0">
                         <label id="upload-label" for="upload" class="font-weight-light text-muted">{{$user->image}}</label>
                         <div class="input-group-append">
                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> 
                                <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                                <small class="text-uppercase font-weight-bold text-muted">Choose file</small>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                     <div class="col-md-6">
                        <label for="first_name">First Name</label>
                         <input type="text" class="bg-light form-control" placeholder="Enter First Name..." value="{{$user->first_name}}" id="first_name"name="first_name">
                     </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="bg-light form-control" placeholder="Last Name" value="{{$user->last_name}}" id="last_name" name="last_name">
                    </div>
                </div>
                <div class="py-2">
                <div class="row py-2">
                    <div class="col-md-6"> 
                        <label for="name">User Name</label>
                         <input type="text" class="bg-light form-control" value="{{$user->name}}" id="name" name="name"> 
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="email">Email</label> 
                        <input type="email" class="bg-light form-control" value="{{$user->email}}" id="email" name="email"> 
                    </div>
                </div>
                <div class="py-2">
                    <div class="row py-2">
                        <div class="col-md-6"> 
                            <label for="password">Password</label>
                             <input type="password" class="bg-light form-control" id="password" name="password" placeholder="Password..." > 
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3"> 
                            <label for="address">Address</label> 
                            <input type="text" class="bg-light form-control" value="{{$user->address}}" id="address" name="address">
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6"> 
                        <label for="confirm_password">Repassword</label>
                        <input type="password" placeholder="Confirm Password..." class="bg-light form-control" id="confirm_password" name="confirm_password"> 
                        <span id='message'></span>
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="phone">Phone Number</label> 
                        <input type="tel"class="bg-light form-control" value="{{$user->phone}}" id="phone" name="phone">
                    </div>
                </div>
                <div class="py-3 pb-4 border-bottom"> 
                    <button type="submit" class="btn btn-primary mr-3">Save Changes</button> 
                    <button class="btn border button">Cancel</button>
                </div>
         </form>
        </div>
    </div>
@endsection
@section('script')
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
 

