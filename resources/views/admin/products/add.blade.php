@extends('admin.index')
@section('title')
    Add Products
@endsection
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

            @if (session('error_img'))
            <div class="alert alert-danger">
                {{ session('error_img') }}
            </div>
        @endif
            <form action="{{ route('products_add') }}" method="post" enctype="multipart/form-data">
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

                    <div>
                        <label for="image"> Multiple Image
                        </label>
                        <input type="file" name="images[]" id="image" multiple="multiple">

                    </div>
                <div class="py-2">
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="name">Categories Name</label>
                            <select class="bg-light form-control" id="category_id" name="category_id">
                                @foreach ($list_categories as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->name }}</option>
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
                                <input type="text" class="bg-light form-control" id="unit_price" value=" 000" name="unit_price"
                                    placeholder="Enter Unit Price...">
                            </div>
                            <div class="col-md-6 pt-md-0 pt-3"> <label for="sale_price">Sale Price</label> <input
                                    type="text" class="bg-light form-control" value=" 000" placeholder="Enter Sale Price..."
                                    id="sale_price" name="sale_price"> </div>
                        </div>
                        <br>
                        <span>Size <br></span>
                        @foreach ($list_sizes as $sizes)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="size" name="attribute_id[]" value="{{ $sizes->id }}" />
                            <label class="form-check-label" for="size">{{ $sizes->value }}</label>
                          </div>
                          @endforeach
                            <br>
                            <span><br>Color <br></span>
                          @foreach ($list_colors as $colors)
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="color" name="attribute_id[]" value="{{ $colors->id }}" />
                              <label class="form-check-label" for="color">{{ $colors->value }}</label>
                            </div>
                            @endforeach


                    </div>
                    <div class="row py-2">
                            <span >Quantity<br></span>
                            <input type="text" class="bg-light form-control"  value="" name="quantity"
                             >

                    </div>
                    
                        <div class="row py-2">


                         
                                {{-- <label for="size">Size</label>
                                <select class="bg-light form-control" id="size" name="size">
                                    @foreach ($list_sizes as $sizes)
                                        <option value="{{ $sizes->id }}">{{ $sizes->value }}</option>
                                    @endforeach
                                </select> --}}
                       

                       
                                {{-- <label for="color">Color</label>
                                <select class="bg-light form-control" id="color" name="attribute_id[]">
                                    @foreach ($list_colors as $colors)
                                        <option value="{{ $colors->id }}">{{ $colors->value }}</option>
                                    @endforeach
                                </select> --}}
                            
                            {{-- <div class="col-md-6">
                                <label for="color">brand</label>
                                <select class="bg-light form-control" id="brand" name="brand">
                                    @foreach ($list_brands as $brands)
                                        <option value="{{ $brands->id }}">{{ $brands->value }}</option>
                                    @endforeach
                                </select>
                            </div> --}}



                           
                                <label for="description">Description</label>
                                <textarea class="ckeditor" name="description" id="description" cols="30" rows="30"></textarea>
                           
                        </div>

                        <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save
                                Changes</button> <button class="btn border button">Cancel</button> </div>
            </form>
        </div>
    </div>



    </div>
@endsection
