@extends('admin.index')

@section('content')
<?php $users = Auth::user(); ?>
<div class="wrapper bg-white mt-sm-5">
    <h4 class="pb-4 border-bottom">Account settings</h4>

    <form action="admin/users/edit/{{$users->id}}" method="POST">
    <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
        <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
            <p>Accepted file type .png. Less than 1MB</p> <input type="file" value="upload">
        </div>
    </div>
    <div class="py-2">
        <div class="row py-2">
            <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" name="first_name" class="bg-light form-control" value="{{$users->first_name}}"> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" name="last_name" class="bg-light form-control" placeholder="Last Name" value="{{$users->last_name}}"> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="email">Email Address</label> <input type="email" name="email" class="bg-light form-control" value="{{$users->email}}" placeholder="Email"> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" name="phone" value="{{$users->phone}}" class="bg-light form-control" placeholder="Phone Number"> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="city">City</label> <input type="text" name="city" class="bg-light form-control" value="{{$users->city}}" placeholder="City"> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="address">Address</label> <input type="tel" name="phone" value="{{$users->address}}" class="bg-light form-control" placeholder="Address"> </div>
        </div>
        <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div> <b>Deactivate your account</b>
                <p>Details about your company account and password</p>
            </div>
            <div class="ml-auto"> <button class="btn danger">Deactivate</button> </div>
        </div>
    </div>
</form>
</div>
@endsection