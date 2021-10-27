@extends('admin.index')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="wrapper bg-white mt-sm-4">
            <h4 class="pb-4 border-bottom">Colors Add</h4>
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
            <form action="{{route('colors_add')}}" method="post" >
                @csrf

            <div class="py-2">
                <div class="row py-2">
                    <div class="col-md-6"> 
                        <label for="name">Colors Name</label>
                         <input type="text"
                            class="bg-light form-control" placeholder="Enter Name..." id="name" name="name"> 
                        </div>
                </div>


                <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save Changes</button> <button
                        class="btn border button">Cancel</button> </div>
                    </form>
            </div>
        </div>



    </div>
@endsection
