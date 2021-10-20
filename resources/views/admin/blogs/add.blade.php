@extends('admin.index')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="wrapper bg-white mt-sm-4">
            <h4 class="pb-4 border-bottom">Blog Add</h4>
            @if (session('add'))
                <div class="alert alert-success">
                    {{ session('edit') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('blogs_add') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- chus thich --}}
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
                            <label for="title">Title</label>
                            <input type="text" class="bg-light form-control" id="title" name="title">
                    </div>
                    <div class="py-2">
                        <div class="row py-2">

                             <label for="description">Description</label>
                                <textarea class="bg-light form-control" name="description" id="description" cols="30"
                                    rows="10">
                                    </textarea>
                        </div>


                        <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save
                                Changes</button> <button class="btn border button">Cancel</button> </div>
            </form>
        </div>
    </div>



    </div>
@endsection
