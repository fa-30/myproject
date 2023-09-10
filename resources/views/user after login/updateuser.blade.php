
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
    
      <a class="tab">update your profile</a>
      <div class="login-space">
        <!--signup starts here-->

        <form action= "{{ route('edituser',$user->id) }}" method="post" enctype="multipart/form-data" class="sign-up-form">
        @method('PUT')
      @csrf


          <div class="group">
          <br><br>
            <label for="name" class="label"> name</label>
            <input name="name" type="text" class="input"   value="{{$user->name}}" placeholder="enter your name" >
            <span  >@error('name'){{$message}} @enderror</span>
          </div>
          
         

          <div class="group">
            <label for="password" class="label">Password</label>
            <input name="password" type="password" class="input" data-type="password"   placeholder="Create your password">
            <span class="text-danger">@error('password'){{$message}} @enderror</span>
          </div>
          
          <div class="group">
            <label for="email" class="label">Email Address</label>
            <input name="email" type="email" class="input"  value="{{$user->email}}" placeholder="Enter your email address">
            <span class="text-danger">@error('email'){{$message}} @enderror</span>
          </div>
          <div class="group">
          <label for="photo" class="label">image</label>
             <input type="file" name="photo">
          </div>
          <div class="group">
        
            <input type="submit" class="button" name="sign" name="Sign_Up">
            <span class="text-danger">@error('photo'){{$message}} @enderror </span>
          </div>
        
        </form>
</div>
</div>
</div>

</body>
</html>