@extends('admin.index')

@section('title')
Add Categories
@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="wrapper bg-white mt-sm-4">
        <h4 class="pb-4 border-bottom">Category Add</h4>
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
        <form action="{{route('categories_add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row py-2">
                <!-- Uploaded image area-->
                <div class="image-area mt-4"><img style="height: 300px; width:300px; boder-radius:50px;" id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                </div>
            </div>
            <div class="row py-2">
                <!-- Upload image input-->
                <div class="input-group  rounded-pill bg-white shadow-sm">
                    <input id="upload" name="img" type="file" onchange="readURL(this);" class="form-control border-0">
                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose
                        file</label>
                    <div class="input-group-append">
                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                    </div>
                </div>
            </div>
            <div class="py-2">
                <label for="class_id">Classify Name</label>
                <select class="bg-light form-control" id="class_id" name="class_id">
                    @foreach ($list_classify as $classify)
                    <option value="{{$classify->id}}">{{$classify->name}}</option>
                    @endforeach
                </select>
                <label for="name">Categories Name</label>
                <input type="text" class="bg-light form-control" placeholder="Enter Categories Name..." id="name" name="name">
                <label for="description">Description</label>
                <textarea class="ckeditor" name="description" id="description" cols="30" rows="10"></textarea>
                <div class="py-3 pb-4 border-bottom">
                    <button type="submit" class="btn btn-primary mr-3">Save Changes</button>
                    <button class="btn border button">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection