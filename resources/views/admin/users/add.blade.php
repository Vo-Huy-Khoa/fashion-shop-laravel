@extends('admin.index')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="wrapper bg-white mt-sm-4">
            <h4 class="pb-4 border-bottom">Account Add</h4>
            @if (session('add'))
                <div class="alert alert-success">
                    {{ session('add') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('users_add') }}" method="post" enctype="multipart/form-data">
                @csrf


                {{-- chus thich --}}
                <div class="py-2">
                    <div class="row py-2">
                        <div class="col-md-6">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                    <!-- Uploaded image area-->
                    <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box
                        below.</p>
                    <div class="image-area mt-4"><img style="height: 300px; width:300px; boder-radius:50px;" id="imageResult" src="#" alt=""
                            class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                        </div>
                        </div>
                </div>
                {{-- chu thich --}}
                <div class="py-2">
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="name">User Name</label>
                            <input type="text" class="bg-light form-control" placeholder="Enter User Name..." id="name"
                                name="name">
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email</label> <input type="email"
                                class="bg-light form-control" placeholder="...@gmail.com" id="email" name="email"> </div>
                    </div>
                    <div class="py-2">
                        <div class="row py-2">
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="bg-light form-control" id="password" name="password"
                                    placeholder="Enter Password...">
                            </div>
                            <div class="col-md-6 pt-md-0 pt-3"> <label for="address">Address</label> <input type="text"
                                    class="bg-light form-control" placeholder="Address" id="address" name="address"> </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6"> <label for="repassword">Repassword</label> <input type="repassword"
                                    placeholder="Enter repassword..." class="bg-light form-control" id="repassword"
                                    name="repassword"> </div>
                            <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel"
                                    class="bg-light form-control" placeholder="Enter Your Phone" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save
                                Changes</button> <button class="btn border button">Cancel</button> </div>
            </form>
        </div>
    </div>



    </div>
@endsection
