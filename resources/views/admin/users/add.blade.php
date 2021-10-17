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
            <form action="{{route('users_add')}}" method="post">
                @csrf
            {{-- <div class="d-flex align-items-start py-3 border-bottom"> <img
                    src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    class="img" alt="">
                <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                    <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
                </div>
            </div> --}}
            <div class="py-2">
                <div class="row py-2">
                    <div class="col-md-6"> 
                        <label for="name">User Name</label>
                         <input type="text"
                            class="bg-light form-control" placeholder="Enter User Name..." id="name" name="name"> 
                        </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email</label> <input type="email"
                            class="bg-light form-control" placeholder="...@gmail.com" id="email" name="email"> </div>
                </div>
                <div class="py-2">
                    <div class="row py-2">
                        <div class="col-md-6"> 
                            <label for="password">Password</label>
                             <input type="password"
                                class="bg-light form-control" id="password" name="password" placeholder="Enter Password..." > 
                            </div>
                        <div class="col-md-6 pt-md-0 pt-3"> <label for="address">Address</label> <input type="text"
                                class="bg-light form-control" placeholder="Address" id="address" name="address"> </div>
                    </div>
                <div class="row py-2">
                    <div class="col-md-6"> <label for="repassword">Repassword</label> <input type="repassword" placeholder="Enter repassword..."
                            class="bg-light form-control" id="repassword" name="repassword"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel"
                            class="bg-light form-control" placeholder="Enter Your Phone" id="phone" name="phone"> </div>
                </div>

                <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save Changes</button> <button
                        class="btn border button">Cancel</button> </div>
                    </form>
            </div>
        </div>



    </div>
@endsection
