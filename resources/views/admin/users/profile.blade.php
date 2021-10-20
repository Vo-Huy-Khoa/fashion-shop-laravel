@extends('admin.index')

@section('content')
    <?php $users = Auth::user(); ?>
    <div class="wrapper bg-white mt-sm-5">
        <h4 class="pb-4 border-bottom">Account settings</h4>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('edit'))
            <div class="alert alert-sucess">
                {{ session('edit') }}
            </div>
        @endif
        <form action="admin/users/edit/{{ $users->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row py-2">
                <!-- Uploaded image area-->
                <div class="image-area mt-4"><img style="height: 300px; width:300px; boder-radius:50px;" id="imageResult" src="#" alt=""
                        class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                    </div>
                <div class="row py-2">
                   
                        <!-- Upload image input-->
                        <div class="input-group  rounded-pill bg-white shadow-sm">
                            <input id="upload" name="img" type="file" onchange="readURL(this);"
                                class="form-control border-0">
                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose
                                file</label>
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i
                                        class="fa fa-cloud-upload mr-2 text-muted"></i><small
                                        class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                            </div>
                        </div>
                  
                </div>
            <div class="py-2">
                <div class="row py-2">
                    <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text"
                            name="first_name" class="bg-light form-control" value="{{ $users->first_name }}"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text"
                            name="last_name" class="bg-light form-control" placeholder="Last Name"
                            value="{{ $users->last_name }}"> </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6"> <label for="email">Email Address</label> <input type="email" name="email"
                            class="bg-light form-control" value="{{ $users->email }}" placeholder="Email"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel"
                            name="phone" value="{{ $users->phone }}" class="bg-light form-control"
                            placeholder="Phone Number"> </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6"> <label for="city">City</label> <input type="text" name="city"
                            class="bg-light form-control" value="{{ $users->city }}" placeholder="City"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="address">Address</label> <input type="text"
                            name="address" value="{{ $users->address }}" class="bg-light form-control"
                            placeholder="Address"> </div>
                </div>
                <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save
                        Changes</button> <button class="btn border button">Cancel</button> </div>
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
