<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="admin_asset/img/logo/logo.png" rel="icon">


<link rel="stylesheet" href="{{ URL::asset('admin_asset/vendor/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin_asset/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin_asset/css/ruang-admin.min.css') }}">

<base href="{{asset('')}}">

{{-- DataTable --}}
<link rel="stylesheet" href="{{ URL::asset('admin_asset/vendor/datatables/dataTables.bootstrap4.min.css') }}">


{{-- User --}}
<link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('resources/css/app.css') }}">

{{-- Admin Profile --}}
<link rel="stylesheet" href="{{ URL::asset('Front/css/admin_profile.css') }}">

<style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
#upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'Uploaded image result';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}

/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
    min-height: 100vh;
    background-color: #757f9a;
    background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);
}

</style>

