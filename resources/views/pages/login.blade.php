
@extends('layout.index')
@section('content')
@if (!Auth::check())
    

<link rel="stylesheet" href="{{ URL::asset('Front/css/login.css') }}">

    <div id="container">
        <div id="formcontainer">
            @if (session('register'))
            <div class="alert alert-success">
                {{ session('register') }}
            </div>
        @endif
            <form action="{{route('users_login')}}" method="POST">
            @csrf
             <img id="img1" src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?cs=srgb&dl=background-beverage-brown-414645.jpg&fm=jpg"> <a href="#"><img id="cross" src="https://image.flaticon.com/icons/svg/148/148766.svg"></a>
            <p  id="text">Login Shop Fashion</p> 
            <input id="email" name="email" type="email" type="tel" placeholder="Email / Phone"> 
            
            <input id="password" name="password" type="password" placeholder="Password">
             <input id="check" type="checkbox">
            <p id="text1">Remember Me</p> <a id="forget" href="#">Forget Password ?</a> 
            
            <button id="login" type="submit">Log In</button>
            <hr id="hrline1">
            <p id="text2">or login with</p>
            <hr id="hrline2"> <button id="facebook"><img id="facebook1" src="https://image.flaticon.com/icons/svg/174/174848.svg">Facebook</button> <button id="google"><img id="google1" src="https://image.flaticon.com/icons/svg/281/281764.svg">Google</button>
            <p id="text3">Not a Member?</p> <a id="signup" href="{{route('users_register')}}">Signup Now</a>
        </form>
        </div>
    </div>
</body>


<script>
    $(document).ready(function(){
document.getElementById("cross").onclick=function(){
document.getElementById("formcontainer").style.display="none";
};
});
</script>
@endif
@endsection