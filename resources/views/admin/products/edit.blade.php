@extends('admin.index')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="wrapper bg-white mt-sm-4">
            <h4 class="pb-4 border-bottom">Product Edit</h4>
            @if (session('edit'))
                <div class="alert alert-success">
                    {{ session('edit') }}
                </div>
            @endif

            @if (session('error_edit'))
                <div class="alert alert-danger">
                    {{ session('error_edit') }}
                </div>
            @endif

            @if (session('delete_comments'))
            <div class="alert alert-success">
                {{ session('delete_comments') }}
            </div>
        @endif
            <form action="admin/products/edit/{{$products->id}}" method="post" enctype="multipart/form-data">
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
                                class="bg-light form-control" value="{{$products->name}}" id="name" name="name"> </div>
                    </div>
                    <div class="py-2">
                        <div class="row py-2">
                            <div class="col-md-6">
                                <label for="unit_price">Unit Price</label>
                                <input type="text" class="bg-light form-control" id="unit_price" name="unit_price"
                                    value="{{$products->unit_price}}">
                            </div>
                            <div class="col-md-6 pt-md-0 pt-3"> <label for="sale_price">Sale Price</label> <input
                                    type="text" class="bg-light form-control" value="{{$products->sale_price}}"
                                    id="sale_price" name="sale_price"> </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6 pt-md-0 pt-3"> <label for="size">Size</label> <input type="tel"
                                    class="bg-light form-control" value="{{$products->size}}" id="size" name="size"> </div>


                            <div class="col-md-6">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="80" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save
                                Changes</button> <button class="btn border button">Cancel</button> </div>
            </form>
        </div>



    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Comments</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Comment</th>
                                {{-- <th>Size</th>
                                <th>Unit Price</th>
                                <th>Sale Price</th>
                                <th>Add</th>
                                <th>Edit</th> --}}
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Comment</th>
                                {{-- <th>Unit Price</th>
                                <th>Sale Price</th>
                                <th>Add</th>
                                <th>Edit</th> --}}
                                <th>Delete</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($products->comments as $comments)
                            <tr>
                                <td>{{$comments->id}}</td>
                                <td>{{$comments->users->name}}</td>
                                <td>{{$comments->comment}}</td>


                                {{-- <td><a href="{{route('products_add')}}"><i></i>Add</a></td>
                                <td><a href="admin/products/edit/{{$products->id}}"><i></i>Edit</a></td> --}}
                                <td><a href="admin/products/delete_comments/{{$comments->id}}"</a><i></i>Delete</a></td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>



    </div>
@endsection

