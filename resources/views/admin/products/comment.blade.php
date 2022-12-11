@extends('admin.index')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Comment</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{routet('index')}}">Home</a></li>
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
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Product Name</th>
                                <th>Description</th>
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
                                <th>Description</th>
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
                                <td><a href="admin/comments/delete/{{$comments->id}}" </a><i></i>Delete</a></td>

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



<!-- Page level custom scripts -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
</script>


@endsection