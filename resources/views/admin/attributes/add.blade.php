@extends('admin.index')
@section('title')
    Add Attributes
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="wrapper bg-white mt-sm-4">
            <h4 class="pb-4 border-bottom">Attributes Add</h4>
            @if (session('add'))
                <div class="alert alert-success">
                    {{ session('add') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="admin/attributes/add" method="post">
                @csrf
                <div class="py-2">
                    <div class="row py-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Properties</label>
                                <select class="form-control" name="name" id="inputName">
                                    <option style="text-align: center" value="color">Color</option>
                                    <option style="text-align: center" value="size">Size</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 color ">
                    <div class="row py-2">
                        <div class="col-md-12">
                            <label for="v1">Value</label>
                            <input type="color" class="form-control" id="v1" name="value">
                        </div>
                    </div>
                </div>
                <div class="py-2 size"style="display: none">
                    <div class="row py-2">
                        <div class="col-md-12">
                            <label for="v2">Value</label>
                            <input type="text" class="form-control" id="v2" name="">
                        </div>
                    </div>
                </div>
                <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3">Save
                        Changes</button> <button class="btn border button">Cancel</button> </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#inputName').change(function(event){
        var _input = $('#inputName').val();
        if (_input == 'size') {
            // alert("size");
           $('#v2').attr({
                name : 'value'
           });
           $('.size').show();

           $('#v1').attr({
                name : '',
           });
           $('.color').hide();

        }else if(_input == 'color'){
            // alert("color ");
           $('#v1').attr({
                name : 'value',
           });
           $('.color').show();

           $('#v2').attr({
                name : '',
           });
           $('.size').hide();
        }
    });
</script>
@endsection
