@extends('admin.index')
@section('title')
    List Blog
@endsection
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DataTables Blogs</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">DataTables</li>
            </ol>
        </div>
        @if (session('delete'))
            <div class="alert alert-danger">
                {{ session('delete') }}
            </div>
        @endif
        <!-- Row -->
        <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Title</th>
                                    <th>Brief</th>
                                    <th>Description</th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Brief</th>
                                    <th>Description</th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($list_blogs as $blogs)
                                <tr>
                                    <td>{{$blogs->title}}
                                        <img style="width: 100px;height:100px" src="uploads/blogs/{{$blogs->image}}"alt=""> 
                                    </td>
                                    <td>{{substr($blogs->brief,0,500)}}</td>
                                    <td>{!!substr($blogs->description,0,500)!!}</td>
                                    <td><a href="{{route('blogs_add')}}"><i></i>Add</a></td>
                                    <td><a href="admin/blogs/edit/{{$blogs->id}}"><i></i>Edit</a></td>
                                    <td><a href="admin/blogs/delete/{{$blogs->id}}"</a><i></i>Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---Container Fluid-->
@endsection

