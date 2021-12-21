@extends('admin.index')
@section('title')
    Attributes
@endsection
@section('content')
<style>
    .colors label {
        cursor: pointer;
        margin-top: 5px;
    }
    .swatch {
        display: inline-block;
        vertical-align: middle;
        height: 30px;
        width: 30px;
        margin: 0 5px 0 0;
        border: 1px solid #d4d4d4;
    }
</style>
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DataTables Color</h1>
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
                                    <th>ID</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td style="text-align: center"> <br>
                                        @foreach ($list_sizes as $sizes)
                                        <div class="colors">
                                            <label>
                                                <span class="swatch"
                                                    style="background-color:white; text-align:center">{{ $sizes->value }}</span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td style="text-align: center"> <br>
                                        @foreach ($list_colors as $colors)
                                        <div class="colors">
                                            <label>
                                                <span class="swatch"
                                                    style="background-color:{{ $colors->value }}"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td><a href="admin/attributes/add"><i></i>Add</a></td>
                                    <td><a href="admin/attributes/edit/1"><i></i>Edit</a></td>
                                    <td><a href="admin/attributes/delete/2"</a><i></i>Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---Container Fluid-->
    <!-- Page level custom scripts -->
@endsection

