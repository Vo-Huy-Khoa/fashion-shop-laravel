@extends('admin.index')
@section('title')
Edit Products
@endsection
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
            <div class="row py-2">
                <!-- Uploaded image area-->
                <div class="image-area mt-4"><img style="height: 300px; width:300px; boder-radius:50px;" id="imageResult" src="uploads/products/{{$products->image}}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
            </div>
            <div class="row py-2">

                <!-- Upload image input-->
                <div class="input-group  rounded-pill bg-white shadow-sm">
                    <input id="upload" name="img" value="{{$products->image}}" type="file" onchange="readURL(this);" class="form-control border-0">
                    <label id="upload-label" for="upload" class="font-weight-light text-muted">{{$products->image}}</label>
                    <div class="input-group-append">
                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                    </div>
                </div>
            </div>
            <div>
                <label for="image"> Multiple Image <br>
                </label>
                <input type="file" name="images[]" id="image" multiple="multiple">
            </div>
            <div class="row">
                @foreach ($product_image as $image)
                <div class="col-md-4">
                    <a href="" class="thumbnail"><img src="uploads/products/{{$image->image}}" alt=""></a>
                </div>
                @endforeach
            </div>
            <div class="py-2">
                <div class="row py-2">
                    <div class="col-md-6">
                        <label for="name">Categories Name</label>
                        <select class="bg-light form-control" id="category_id" name="category_id">
                            @foreach ($list_categories as $categories)
                            <option @if ($products->category_id == $categories->id )
                                {{"selected"}}
                                @endif
                                value="{{$categories->id}}">{{$categories->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Product Name</label> <input type="text" class="bg-light form-control" value="{{$products->name}}" id="name" name="name"> </div>
                </div>
                <div class="py-2">
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="unit_price">Unit Price</label>
                            <input type="text" class="bg-light form-control" id="unit_price" name="unit_price" value="{{$products->unit_price}}">
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3"> <label for="sale_price">Sale Price</label> <input type="text" class="bg-light form-control" value="{{$products->sale_price}}" id="sale_price" name="sale_price"> </div>
                    </div>
                    <span>Size <br></span>
                    @foreach ($list_sizes as $sizes)
                    <div class="form-check form-check-inline">
                        <div class="colors">
                            <label>
                                <input type="checkbox" name="attribute_id[]" value="{{ $sizes->id }}" {{ in_array($sizes->id,$id_attr)?'checked':'' }}>
                                <span class="swatch" style="background-color:white; text-align:center">{{ $sizes->value }}</span>
                            </label>
                        </div>
                    </div>
                    @endforeach
                    <br>
                    <span><br>Color <br></span>
                    @foreach ($list_colors as $colors)
                    <div class="form-check form-check-inline">
                        <div class="colors">
                            <label>
                                <input type="checkbox" name="attribute_id[]" value="{{ $colors->id }}" {{ in_array($colors->id,$id_attr)?'checked':'' }} />
                                <span class="swatch" style="background-color:{{ $colors->value }}"></span>
                            </label>
                        </div>
                    </div>
                    @endforeach
                    <div class="row py-2">
                        <span>Quantity<br></span>
                        <input type="text" class="bg-light form-control" value="" name="quantity">
                    </div>
                    <div class="row">
                        <label for="description">Description</label>
                        <textarea class="ckeditor" name="description" id="description" cols="30" rows="5">{{$products->description}} </textarea>
                    </div>
                    <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save
                            Changes</button> <button class="btn border button">Cancel</button> </div>
        </form>
    </div>
</div>
</div>
<div class="container">
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
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Comment</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($products->comments as $comments)
                            <tr>
                                <td>{{$comments->id}}</td>
                                <td>{{$comments->users->name}}</td>
                                <td>{{$comments->comment}}</td>
                                <td><a href="admin/products/delete_comments/{{$comments->id}}" </a><i></i>Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection