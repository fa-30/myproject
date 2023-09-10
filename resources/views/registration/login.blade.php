<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">

<link rel="stylesheet" href="{{asset('css/login admin.css')}}">
</head>
<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form  action= "{{ route('loginform') }}"method="post">
    @csrf
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="email"value="{{old('email')}}" id="email">
        <span style="color: gray;"class="text-danger">@error('email'){{$message}} @enderror</span>
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">
        <span style="color: gray;" class="text-danger">@error('password'){{$message}} @enderror</span>
      
        <button  class="btn btn-success">Log In</button>
        <br><br>
        @if(Session::has('fail'))
    <div style="color: gray;">
       {{Session::get('fail')}}
    </div>
    @endif
    </form>
</body>
</html>