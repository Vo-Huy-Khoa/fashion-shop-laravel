@extends('layout.index')
@section('content')    
<?php $users = Auth::user(); ?>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://i.imgur.com/O1RmJXT.jpg" width="90"><span class="font-weight-bold">{{$users->first_name." ".$users->last_name}}</span><span class="text-black-50">{{$users->email}}</span><span>{{$users->address." ".$users->city}}</span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="text-right">Edit your profile</h6>
                </div>
                <form action="user/profile_edit/{{$users->id}}">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="first name" value="John"></div>
                    <div class="col-md-6"><label class="labels">Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="Doe" placeholder="Doe"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">User Name</label>
                        <input type="text" name="name" class="form-control" placeholder="User Name" value=""></div>
                    <div class="col-md-12"><label class="labels">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value=""></div>
                    <div class="col-md-12"><label class="labels">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label>
                        <input type="text" name="city" class="form-control" placeholder="country" value="Việt Nam"></div>
                    <div class="col-md-6"><label class="labels">State/Region</label>
                        <input type="text" name="address" class="form-control" value="" placeholder="Local Address"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div>
                <div class="d-flex flex-row mt-3 exp-container"><img src="https://i.imgur.com/azSfBM3.png" width="45" height="45">
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">Senior UI/UX Designer</span><span class="d-block text-black-50 labels">Twitter Inc.</span><span class="d-block text-black-50 labels">March,2017 - May 2020</span></div>
                </div>
                <hr>
                <div class="d-flex flex-row mt-3 exp-container"><img src="https://img.icons8.com/color/100/000000/facebook.png" width="45" height="45">
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">Senior UI/UX Designer</span><span class="d-block text-black-50 labels">Facebook Inc.</span><span class="d-block text-black-50 labels">March,2017 - May 2020</span></div>
                </div>
                <hr>
                <div class="d-flex flex-row mt-3 exp-container"><img src="https://img.icons8.com/color/50/000000/google-logo.png" width="45" height="45">
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">UI/UX Designer</span><span class="d-block text-black-50 labels">Google Inc.</span><span class="d-block text-black-50 labels">March,2017 - May 2020</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection