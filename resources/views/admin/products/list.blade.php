@extends('admin.index')

@section('content')

<?php use App\Models\Product_Attribute; ?>
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DataTables Products</h1>
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
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    {{-- <th>Brand</th> --}}
                                    <th>Unit Price</th>
                                    <th>Sale Price</th>
                                    {{-- <th>Comments</th> --}}
                                    <th>Status</th>

                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    {{-- <th>Brand</th> --}}
                                    <th>Unit Price</th>
                                    <th>Sale Price</th>
                                    {{-- <th>Comments</th> --}}
                                    <th>Status</th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($list_products as $products)
                                <tr>
                                    <td style="text-align: center">{{Str::substr($products->name,0,50)}}
                                    <img style="width: 100px;height:100px" src="uploads/products/{{$products->image}}"alt="">
                                    </td>
                                    <td>{!! substr($products->description, 0,800) !!}</td>
                                    <td>
                                        <?php $id_attr = Product_Attribute::where('product_id',$products->id)->pluck('attribute_id')->toArray();?>
                                        @foreach ($list_sizes as $sizes)
                                            @if(in_array($sizes->id,$id_attr))
                                            {{$sizes->value." "}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <?php $id_attr = Product_Attribute::where('product_id',$products->id)->pluck('attribute_id')->toArray();?>
                                        @foreach ($list_colors as $colors)
                                            @if(in_array($colors->id,$id_attr))
                                            {{$colors->value." "}}
                                            @endif
                                        @endforeach
                                </td>
                                    
                                   {{-- <td>{{$products->brands->name}}</td> --}}
                                    <td>{{$products->unit_price}}</td> 
                                    <td>{{$products->sale_price}}</td>
                                    @if($products->status == '0')
                                        <td><span class="badge badge-success">Đã bán</span></td>   
                                    @elseif($products->status == '1')
                                        <td><span class="badge badge-danger">Chưa bán</span></td>
                                     @endif

                                    {{-- <td><a href="admin/comments/list/{{$products->id}}"><i></i>Comments</a></td> --}}
                                    <td><a href="{{route('products_add')}}"><i></i>Add</a></td>
                                    <td><a href="admin/products/edit/{{$products->id}}"><i></i>Edit</a></td>
                                    <td><a href="admin/products/delete/{{$products->id}}"</a><i></i>Delete</a></td>

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
        $(document).ready(function () {
          $('#dataTable').DataTable(); // ID From dataTable 
          $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
      </script>
  


@endsection
