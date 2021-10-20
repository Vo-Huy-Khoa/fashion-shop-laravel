@extends('admin.index')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="wrapper bg-white mt-sm-4">
            <h4 class="pb-4 border-bottom">Blog Edit</h4>
            @if (session('edit'))
            <div class="alert alert-success">
                {{ session('edit') }}
            </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
            <form action="admin/blogs/edit/{{$blogs->id}}" method="post">
                @csrf

            <div class="py-2">
                <div class="row py-2">
                    <div class="col-md-6"> 
                        <label for="title">Title</label>
                         <input type="text"
                            class="bg-light form-control" value="{{$blogs->title}}" id="title" name="title"> 
                        </div>
                </div>
                <div class="py-2">
                    <div class="row py-2">

                        <div class="col-md-6 pt-md-0 pt-3"> <label for="description">Description</label> 
                            <textarea class="bg-light form-control" aria-valuetext="{{$blogs->description}}" name="description" id="description" cols="30" rows="10">
                                </textarea> </div>
                    </div>


                <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save Changes</button> <button
                        class="btn border button">Cancel</button> </div>
                    </form>
            </div>
        </div>



    </div>
@endsection
