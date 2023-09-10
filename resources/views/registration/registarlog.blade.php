<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">

<link rel="stylesheet" href="{{asset('css/test.css')}}">
</head>
<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
   
  <div class="login-box">
    <div class="login-snip">
    
    <a class="tab">login for user</a>
      <div class="login-space">
      
      <!--login starts here-->

        <form action= "{{ route('registrationform') }}" method="post" class="login">
				@csrf

          <div class="group">
            <br><br>
            <label for="email" class="label">email</label>
            <input name="email" type="text" class="input"  value="{{old('email')}}" placeholder="Enter your email">
            <span class="text-danger">@error('email'){{$message}} @enderror</span>
            <br><br>
          </div>
          <div class="group">
            <label for="password" class="label">Password</label>
            <input name="password" type="password" class="input" data-type="password" placeholder="Enter your password">
            <span class="text-danger">@error('password'){{$message}} @enderror</span>
            <br><br>
            @if(Session::has('fail'))
					<span class="text-danger">{{Session::get('fail')}}</span>
                    @endif
          </div>
        
          <div class="group">
            <input type="submit" class="button" name="log" value="Login">
          </div>
      
        </form>

      
</div>
</div>
</div>

</body>
</html>

