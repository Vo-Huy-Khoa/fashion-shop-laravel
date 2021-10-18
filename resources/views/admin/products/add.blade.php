@extends('admin.index')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="wrapper bg-white mt-sm-4">
            <h4 class="pb-4 border-bottom">Product Add</h4>
            @if (session('add'))
                <div class="alert alert-success">
                    {{ session('add') }}
                </div>
            @endif

            @if (session('error_add'))
                <div class="alert alert-danger">
                    {{ session('error_add') }}
                </div>
            @endif
            <form action="{{ route('products_add') }}" method="post">
                @csrf
                <div class="d-flex align-items-start py-3 border-bottom"> <img
                        src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        class="img" alt="">
                    <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                        <p>Accepted file type .png. Less than 1MB</p> <button
                            class="btn button border"><b>Upload</b></button>
                    </div>

                </div>
                <div class="py-2">
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="name">Categories Name</label>
                            <select class="bg-light form-control" id="category_id" name="category_id" >
                                @foreach ($list_categories as $categories)
                                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Product Name</label> <input type="text"
                                class="bg-light form-control" placeholder="Product Name" id="name" name="name"> </div>
                    </div>
                    <div class="py-2">
                        <div class="row py-2">
                            <div class="col-md-6">
                                <label for="unit_price">Unit Price</label>
                                <input type="text" class="bg-light form-control" id="unit_price" name="unit_price"
                                    placeholder="Enter Unit Price...">
                            </div>
                            <div class="col-md-6 pt-md-0 pt-3"> <label for="sale_price">Sale Price</label> <input
                                    type="text" class="bg-light form-control" placeholder="Enter Sale Price..."
                                    id="sale_price" name="sale_price"> </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6 pt-md-0 pt-3"> <label for="size">Size</label> <input type="tel"
                                    class="bg-light form-control" placeholder="Enter Size..." id="size" name="size"> </div>


                            <div class="col-md-6">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="80" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save
                                Changes</button> <button class="btn border button">Cancel</button> </div>
            </form>
        </div>
    </div>



    </div>
@endsection
