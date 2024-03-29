@extends('layout.index')
<?php $users = Auth::user(); ?>
<?php

use Illuminate\Support\Facades\Hash; ?>
@section('title')
{{$users->first_name." ".$users->last_name}}
@endsection
@section('css')
<link rel="stylesheet" href="{{ URL::asset('Front/css/profile.css') }}">
@endsection
@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    <form action="user/profile_edit/{{$users->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" src="uploads/users/{{$users->image}}" width="90" id="imageResult">
                    <br>
                    <input style="display:none" id="upload" name="img" type="file" onchange="readURL(this);" class="form-control border-0">
                    <div class="input-group-append">
                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4">
                            <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                            <small class="text-uppercase font-weight-bold text-muted">Choose file</small>
                        </label>
                    </div>
                    <br>
                    <span class="font-weight-bold">{{$users->first_name." ".$users->last_name}}</span>
                    <span class="text-black-50">{{$users->email}}</span>
                    <span>{{$users->address." ".$users->city}}</span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    @if (session('edit'))
                    <div class="alert alert-success">
                        {{ session('edit') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="text-right">Chỉnh sửa trang cá nhân</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Họ</label>
                            <input type="text" name="first_name" class="form-control"  value="{{$users->first_name}}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Tên</label>
                            <input type="text" name="last_name" class="form-control" value="{{$users->last_name}}" >
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Tên người dùng</label>
                            <input type="text" name="name" class="form-control"  value="{{$users->name}}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="email" name="email" class="form-control"  value="{{$users->email}}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Mật khẩu</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Confirm Mật khẩu</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                            <span id='message'></span>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Phone</label>
                            <input type="text" name="phone" class="form-control"  value="{{$users->phone}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Thành Phố</label>
                            <input type="text" name="city" class="form-control"  value="{{$users->city}}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">State/Region</label>
                            <input type="text" name="address" class="form-control" value="{{$users->address}}" >
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Lưu</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Chỉnh sửa kinh nghiệm</span><span class="border px-3 p-1 add-experience">
                            <i class="fa fa-plus"></i>
                            &nbsp;Thêm
                        </span>
                    </div>
                    <div class="d-flex flex-row mt-3 exp-container">
                        <img src="https://i.imgur.com/azSfBM3.png" width="45" height="45">
                        <div class="work-experience ml-1">
                            <span class="font-weight-bold d-block">Senior UI/UX Designer</span>
                            <span class="d-block text-black-50 labels">Twitter Inc.</span>
                            <span class="d-block text-black-50 labels">March,2017 - May 2020</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex flex-row mt-3 exp-container">
                        <img src="https://img.icons8.com/color/100/000000/facebook.png" width="45" height="45">
                        <div class="work-experience ml-1">
                            <span class="font-weight-bold d-block">Senior UI/UX Designer</span>
                            <span class="d-block text-black-50 labels">Facebook Inc.</span>
                            <span class="d-block text-black-50 labels">March,2017 - May 2020</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex flex-row mt-3 exp-container">
                        <img src="https://img.icons8.com/color/50/000000/google-logo.png" width="45" height="45">
                        <div class="work-experience ml-1">
                            <span class="font-weight-bold d-block">UI/UX Designer</span>
                            <span class="d-block text-black-50 labels">Google Inc.</span>
                            <span class="d-block text-black-50 labels">March,2017 - May 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#password, #confirm_password').on('keyup', function() {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Matching').css('color', 'green');
        } else
            $('#message').html('Not Matching').css('color', 'red');
    });
</script>
@endsection